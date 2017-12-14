<?php
require_once 'ControllerProduct.php';
class ControllerCategory extends Core
{
    public function fetch() 
    {
        header( 'Location: /');
    }

    public function fetch_param($string)
    {
        $categories = new Categories();
        $products = new Products();
        $productCategories = new productCategories();
        $contrProduct = new ControllerProduct();
        $request = new RequestForm();
        new ControllerMenu($this->view);
        
        $category = new stdClass();

        $treeCategors = $categories->selectNameANDParentIDTableCategories();

        $category = $categories->build_tree($treeCategors,0);

        $productHTML = '';
        $url = $string . '/';
        $countCategory = $categories->getCategoryCountUrl($url);

        if ($countCategory['number'] > 0) {
            $catId = $categories->getCategoryUrl($url);
            $countProds = $productCategories->getProductCategoryCountId($catId['id']);
            
            if ($countProds['number'] == 0) {
                $productHTML = '<h3>Извините! В данной категории нет товаров!</h3>';
            } else {
                $prods = $productCategories->getProductCategoryId($catId['id']);

                $countProdVis = $products->getProductCount($prods[0]['product_id']);
                if ( $countProdVis['number'] == 0) {
                    $productHTML = '<h3>Извините! В данной категории нет товаров!</h3>';
                } else {
                    for ($i=0; $i <$countProds['number'] ; $i++) { 
                        $prodId = $prods[$i]['product_id'];
                        $allProducts[$i] = $products->getProductVis($prodId); 
                    }
                    $countAllProducts = count($allProducts);
                
                    if ($countAllProducts == 0) {
                        $productHTML = '<h3>Извините! В данной категории нет товаров!</h3>';
                    } else {
                        for ($i=0; $i <$countAllProducts ; $i++) { 
                            $productHTML .= $contrProduct->renderOneProduct($allProducts[$i]);
                        }
                    }
                }                
            } 
        } else {
            header('Location: /page404');
        }
        
       if ($request->method() == 'POST' && isset($_POST['exitUser'])) {
            unset($_SESSION['id_user']);
            $sessionUser = '';
            $name = '';
        } else {
            if (isset($_SESSION['id_user'])) {
                $sessionUser = $_SESSION['id_user'];
                $users = new Users();
                $user = $users->getUser($_SESSION['id_user']);
                $name = $user['name'];
            } else {
                $name = '';
                $sessionUser = '';
            }
            
        }
        
        $array_vars = array(
            'name'=>$name,
            'sideBarCategories' => $category,
            'productHTML' => $productHTML,
            'sessionUser'=>$sessionUser,
        );

        return $this->view->render('products.html',$array_vars);
    }    
}