<?php
class ControllerPageAdmin extends CoreAdmin
{
    public function fetch()
    {
        $pages = new Pages();
        $request = new Request();

        $page = new stdClass();
        $array_vars = array();

        $message = array();
        $error = array();
      
        if($request->method() == 'POST' && $_POST['title'] != null) {
            if (!empty($_POST['title'])) {
                if ($this->validAdmin('title',trim($request->post('title')))){
                    $page->title = trim($request->post('title'));
                    $page->description = $request->post('description');
                    $page->visible = $request->post('visible','integer');
                    $page->textpage = $request->post('textpage');

                    $page->updated = gmdate('Y-m-d H:i:s');
                    if($request->post('id','integer')) {
                        $page->url = $this->validUrlAdmin(trim($request->post('url')),trim($request->post('title')),1);
                        $id = $pages->updatePage($request->post('id','integer'), $page);
                    } else {
                        $page->url = $this->validUrlAdmin(trim($request->post('url')),trim($request->post('title')),0);
                        $id = $pages->addPage($page);
                    }
                    $page = $pages->getPage($id);
                    header('Location:/admin/pages/');
                } else {
                    $error[0] = 'has-error';
                    $message[0] = 'Введите название страницы!!Название может содержать в себе английские и русские буквы, цифры, нижнее подчеркивание, дефис и пробел';
                    $array_vars['message'] = $message;
                    $array_vars['error'] = $error;
                }
            } else {
                $error[0] = 'has-error';
                $message[0] = 'Введите название страницы!!';
                $array_vars['message'] = $message;
                $array_vars['error'] = $error;             
            }
        } elseif ($request->method() == 'GET' && isset($_GET['method'])) {
            if ($_GET['method'] == "edit") {
                $array_vars = $this->editPageAdmin();
            } elseif ($_GET['method'] == "delete") {
                $this->deletePageAdmin();
            } elseif ($_GET['method'] == "add") {

            }
        }
        return $this->view->render('viewPageAdmin.html',$array_vars);
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

    public function editPageAdmin()
    {
        $pages = new Pages();
        $request = new Request();

        $page = new stdClass();

        $id = (int)$request->get('id');
        $page = $pages->getPage($id);

        $array_vars = array(
            'page' => $page,
        );
        return $array_vars;
    }

    public function deletePageAdmin()
    {
        $pages = new Pages();
        $request = new Request();

        $page = new stdClass();

        $id = $request->get('id');
        $page = $pages->deletePage($id);
        header('Location:/admin/pages/');
    }
}