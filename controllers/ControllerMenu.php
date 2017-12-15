<?php
class ControllerMenu
{
    public function __construct($twig)
    {
        $pages = new Pages();
        $menuPages = new StdClass();
        $product_cart = array();

        $menuPages = $pages->getPagesVis();

        $countMenuPages = count($menuPages);
        for ($i=0; $i <$countMenuPages ; $i++) { 
            if ($menuPages[$i]['url'] !== '/') {
                $menuPages[$i]['url'] ='/page/' . $menuPages[$i]['url'];
            }
        }
        $twig->addGlobal("global_menuPages", $menuPages);

        /*if (isset($_COOKIE['product_cart'])) { //
            $product_cart = unserialize($_COOKIE['product_cart']);
            $countProductCart = count($product_cart);
            if ($countProductCart > 0) {
                $twig->addGlobal("global_numCart", $countProductCart);
            } 
        }*/
    }
}