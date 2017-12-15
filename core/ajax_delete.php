<?php
$product_cart = array();

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $product_id = $_POST['id'];

    if (isset($_COOKIE['product_cart'])) {
        $product_cart = json_decode($_COOKIE['product_cart'], true);

        unset($product_cart[$product_id]);

        if (!count($product_cart)) {
            unset($_COOKIE['product_cart']);
            setcookie("product_cart", "", time()-3600, '/');
        } else {
            setcookie('product_cart', json_encode($product_cart), time()+3600*24*30,'/');
        }
    }
}

exit(print(json_encode($product_cart)));

/*
$product_cart = unserialize($_COOKIE['product_cart']);
$countProductCart = count($product_cart);

exit(print(json_encode($countProductCart)));*/