<?php
class ControllerCategoryAdmin extends CoreAdmin
{
    public function fetch()
    {
        $categories = new Categories();
        $request = new Request();

        $category = new stdClass();
        $array_vars = array();

        $treeCategors = $categories->selectNameANDParentIDTableCategoriesAll();

        $error = array();
        $message = array();

        if ($request->method() == 'POST'  && $_POST['name'] != null) {
            if (!empty($_POST['name'])) {
                if ($this->validAdmin('name',trim($request->post('name')))){ 
                    $category->name = trim($request->post('name'));
                    $category->description = $request->post('description');
                    $category->visible = $request->post('visible','integer');
                    $category->updated = gmdate('Y-m-d H:i:s');

                    if (!empty($_FILES['image']['name'])) {
                        $addFile = $request->checkImage();
                        $category->image = $addFile;   
                    } else {
                        $category->image = $categories->getCategory($request->post('id','integer'))['image'];
                    }
                    $category->parent_id = $request->post('parent_id');

                    if($request->post('id','integer')) {
                        $category->url = $this->validUrlAdmin(trim($request->post('url')),trim($request->post('name')),1);
                        $id = $categories->updateCategory($request->post('id','integer'),$category);
                    } else {
                        $category->url = $this->validUrlAdmin(trim($request->post('url')),trim($request->post('name')),0);
                         $category->created = gmdate('Y-m-d H:i:s');
                        $id = $categories->addCategory($category);
                    }

                    $category = $categories->getCategory($id);

                    header('Location:/admin/categories/');                
                } else {
                    $error[0] = 'has-error';
                    $message[0] = 'Введите название категории!! Название может содержать в себе английские и русские буквы, цифры, нижнее подчеркивание, дефис и пробел';
                    $array_vars['message'] = $message;
                    $array_vars['error'] = $error;
                } 
            } else {
                $error[0] = 'has-error';
                $message[0] = 'Введите название категории!!';
                $array_vars['message'] = $message;
                $array_vars['error'] = $error;             
            }
        } elseif ($request->method() == 'GET' && isset($_GET['method'])) {
            if ($_GET['method'] == "edit") {
                $array_vars = $this->editCategoryAdmin();
                for ($i=0; $i < count($treeCategors); $i++) {
                    if ($treeCategors[$i]['id'] == $array_vars['category']['parent_id']) {
                        $treeCategors[$i]['isSelected'] = true;
                        break;
                    }
                }
            } elseif ($_GET['method'] == "add") {

            }
        }

        $array_vars['arrayCategor'] = $treeCategors;
        
        return $this->view->render('viewCategoryAdmin.html',$array_vars);
    }
    
    public function validUrlAdmin($valueUrl,$valueTitle,$param)
    {
        $categories = new Categories();

        $valueUrl = str_replace('--','-', str_replace('/','-', trim($valueUrl,'/')));
        $id_prod = (int)$categories->idCategory()['MaxId'] + 1;
        
        if ($categories->getCategoryCountName($valueTitle)['number'] == $param){
            if(empty($valueUrl)) {
                $res = CoreAdmin::translit($valueTitle) . '/';
            } else {
                if ($this->validAdmin('url',$valueUrl)) {
                    $url = $valueUrl;
                } else {
                    $url = $valueUrl . '/';
                }
                
                if ($categories->getCategoryCountUrl($url)['number'] == $param) {
                    $res = $url;
                } else {
                    $res = $id_prod . '-' . $url;
                } 
            } 
        } else {
            if(empty($valueUrl)) {
                $url = $id_prod . '-' .CoreAdmin::translit($valueTitle) .  '/';
                if ($categories->getCategoryCountUrl($url)['number'] == $param){
                    $res =$url;
                } else {
                    $res = $id_prod . '-' . $url;
                }
            } else {
                if ($this->validAdmin('url',$valueUrl)) {
                    $url = $valueUrl;
                } else {
                    $url = $valueUrl . '/';
                }

                if ($categories->getCategoryCountUrl($url)['number'] == $param) {
                    $res = $url;
                } else {
                    $res = $id_prod . '-' . $url;
                }
            }
        }    
        return $res;
    }
    
    public function editCategoryAdmin()
    {
        $categories = new Categories();
        $request = new Request();

        $category = new stdClass();

        $id = (int)$request->get('id');
        $category = $categories->getCategory($id);

        $array_vars = array(
            'category' => $category,
        );
        return $array_vars;
    }
}