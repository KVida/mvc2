<?php
require_once 'ControllerProductAdmin.php';

class ControllerProductsAdmin extends CoreAdmin
{
    
    public function fetch()
    {
        if ($_SESSION['id_admin']) {
            $objProducts =new Products();
            $contrProduct =new ControllerProductAdmin();

            $productHTML = '';
            $allProducts = $objProducts->selectAllTableProducts();
            $countAllProducts = count($allProducts);
            for ($i=0; $i <$countAllProducts ; $i++) { 
                $productHTML .= $contrProduct->renderOneProduct($allProducts[$i]);
            }

            $array_vars = array(
                'productHTML' => $productHTML,
                'numberProducts' => $objProducts->declensionOfTheWordProduct(),
            );

            return $this->view->render('viewMainAdmin.html',$array_vars);

        } else {
            header('Location:/admin/auth/');
        }        
    }
}