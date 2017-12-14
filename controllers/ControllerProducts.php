<?php
require_once 'ControllerProduct.php';
class ControllerProducts extends Core
{
    public function fetch()
    {
        $categories = new Categories();
        $products = new Products();
        $contrProduct = new ControllerProduct();
        $request = new RequestForm();
        new ControllerMenu($this->view);
        
        $category = new stdClass();
        $array_vars = array();

        $treeCategors = $categories->selectNameANDParentIDTableCategories();

        $category = $categories->build_tree($treeCategors,0);

        $productHTML = '';
        $allProducts = $products->getProductsAll();
        
        $countAllProducts = count($allProducts);
        for ($i=0; $i <$countAllProducts ; $i++) { 
            $productHTML .= $contrProduct->renderOneProduct($allProducts[$i]);
        }
        
        if ($request->method() == 'POST' && isset($_POST['exitUser']))  {
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
            'product' => $allProducts,//
            'sessionUser'=> $sessionUser,
            'sideBarCategories' => $category,
            'productHTML' => $productHTML,
            'name' => $name,
        );
        return $this->view->render('products.html',$array_vars);
    }
}