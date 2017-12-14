<?php
class ControllerProduct extends Core
{
    public function fetch_param($string)
    {
        $categories = new Categories();
        $products = new Products();
        $variants = new Variants();
        $images = new Images();
        new ControllerMenu($this->view);
        $category = new stdClass();
        $product = new stdClass();
        $variant = new stdClass();
        $imgs = new stdClass();
        $request = new RequestForm();
        $array_vars = array();

        $treeCategors = $categories->selectNameANDParentIDTableCategories();
        $category = $categories->build_tree($treeCategors,0);

        if ($products->getProductCountUrl($string)['number'] > 0) {
            $product = $products->getProductUrl($string);
            $variant = $variants->getVariantProduct($product['id']);
            $countImg = $images->getCountImage($product['id']);

            $array_vars = array(
                'sideBarCategories' => $category,
                'contentProducts' => $product,
                'contentVariant' => $variant,
            );
            if ($countImg['number'] > 0) {
               $imgs = $images->getImages($product['id']); 
               $array_vars['contentImgs'] =$imgs;
            }
            
            if($request->method() == 'POST' && isset($_POST['exitUser']))  {
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
                    $sessionUser = '';
                    $name = '';
                }
                
            }
            $array_vars['name'] = $name;
            $array_vars['sessionUser'] = $sessionUser;
            
            return $this->view->render('product.html',$array_vars);
        } else {
            header('Location: /page404');
        }
        
    }

    public function renderOneProduct($product)
    {  
        $array_vars = array(
            'product' => $product,
        );

        return $this->view->render('viewOneProduct.html',$array_vars);
    } 

    public function renderOneProductCart($id,$amount)
    {
        $products = new Products();
        $variants = new Variants();

        $product = new stdClass();
        $variant = new stdClass();

        $product = $products->getProductVis($id);
        $variant = $variants->getVariantProduct($id);

        if (!empty($variant['price'])) {
            $totalPrice = (int)$variant['price'] * (int)$amount;
        } else {
            if (!empty($variant->sale_price)) {
                $totalPrice = (int)$variant['sale_price'] * (int)$amount;
            } else {
                $totalPrice = '';
            }
        }      

        $array_vars = array(
            'contentProducts' => $product,
            'contentVariant' => $variant,
            'totalPrice' => $totalPrice,
        );
         
        $array_vars['amountProduct'] = $amount;

        return $this->view->render('viewOneProductCart.html',$array_vars);
    } 
}