<?php
require_once 'ControllerProductAdmin.php';

    class ControllerProductsAllAdmin extends CoreAdmin
    {
        
        public function fetch()
        {
            $objProducts =new ModelAdmin();
            $contrProduct =new ControllerProductAdmin();

            $productHTML = '';
            $allProducts = $objProducts->selectAllTableProducts(); 
            $countAllProducts = count($allProducts);
            for ($i=0; $i <$countAllProducts ; $i++) { 
                $productHTML .= $contrProduct->renderOneProduct($allProducts[$i]);
            }

            $array_vars = array(
                'productHTML' => $productHTML,
            );

            return $this->view->render('viewAllProductsAdmin.html',$array_vars);
        }
    }