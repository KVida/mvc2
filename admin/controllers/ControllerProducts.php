<?php
require_once 'ControllerProductAdmin.php';

    class ControllerProducts extends CoreAdmin
    {
        
        public function fetch()
        {
            $objProducts =new ModelAdmin();
            $contrProduct =new ControllerProductAdmin();

            $productHTML = '';
            $allProducts = $objProducts->selectVisTableProducts();
            $countAllProducts = count($allProducts);
            for ($i=0; $i <$countAllProducts ; $i++) { 
                $productHTML .= $contrProduct->renderOneProduct($allProducts[$i]);
            }

            $array_vars = array(
                'productHTML' => $productHTML,
                'numberProducts' => $objProducts->declensionOfTheWordProduct(),
            );

            return $this->view->render('viewMainAdmin.html',$array_vars);
        }
    }