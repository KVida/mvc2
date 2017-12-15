<?php
require_once 'ControllerProduct.php';
class ControllerCart extends Core
{
    public function fetch() 
    {
        $categories = new Categories();
        $contrProduct = new ControllerProduct();
        $request = new RequestForm();
        $orders = new Orders();
        $users = new Users();
        $purchases = new Purchases();
        $products = new Products();
        $variants = new Variants();

        $user = new stdClass();
        $category = new stdClass();
        $order = new stdClass();

        $array_vars = array();
        $product_carts = array();
        
        new ControllerMenu($this->view);

        $treeCategors = $categories->selectNameANDParentIDTableCategories();
        $category = $categories->build_tree($treeCategors,0);
        $array_vars['sideBarCategories'] = $category;

        if (isset($_COOKIE['product_cart'])) {
            if (isset($_POST['saveProductOrder'])) {
                $id_product = array();
                $amount_product = array();

                $id_product = $request->post('id');
                $amount_product = $request->post('amount');
                $countPost = count($id_product);
                for ($i=0; $i < $countPost; $i++) { 
                    $product_carts[$id_product[$i]] = $amount_product[$i];
                }
                setcookie('product_cart', json_encode($product_carts), time()+3600*24*30,'/');
                
                if (isset($_SESSION['id_user'])) {
                    $displayCSSorder = 'none';
                    $displayCSSuser = 'block';
                } else {
                    setcookie('cart',1,time()+3600*24*7,'/');
                    header( 'Location: /authorization/');
                }
            } else {
                $product_carts = json_decode($_COOKIE['product_cart'], true);
                $displayCSSorder = 'block';
                $displayCSSuser = 'none';
            }

            $productHTML = '';
            foreach ($product_carts as $id => $amount) {
                $productHTML .= $contrProduct->renderOneProductCart($id, $amount); 
            }
            $array_vars['productHTML' ] = $productHTML;

            if (isset($_POST['saveOrder'])) {
                $error = array();
                $messageError = array();

                if (!empty($_POST['phone'])) {
                    if ($this->validForm('phone',trim($request->post('phone')))){
                        $user->phone = strip_tags(trim($request->post('phone')));
                    } else {
                        $error[0]='has-error';
                        $messageError[0] = 'Ошибка! Телефон должен содержать от 5 (если это стационарный телефон) до 12 цифр (если мобильный телефон)';
                    }
                } else {
                    $error[0]='has-error';
                    $messageError[0] = 'Заполните телефон.';
                }
                if (!empty($_POST['city'])) {
                    if ($this->validForm('city',trim($request->post('city')))){
                        $user->city = strip_tags(trim($request->post('city')));
                        $order->user_city = strip_tags(trim($request->post('city')));
                    } else {
                        $error[1]='has-error';
                        $messageError[1] = 'Ошибка! В названии города могут быть только буквы (русские или английские), нижнее почеркивание, дефис, пробелы.';
                    }
                } else {
                    $error[1]='has-error';
                    $messageError[1] = 'Заполните название Вашего города.';
                }

                $id = $users->updateUser($request->post('idUser'), $user);
                $user = $users->getUser($id);
                $array_vars['user' ] = $user;

                $order->user_id = $id;
                if (!empty($_POST['street'])) {
                    if ($this->validForm('street',trim($request->post('street')))){
                        $order->user_street = strip_tags(trim($request->post('street')));
                    } else {
                        $error[2]='has-error';
                        $messageError[2] = 'Ошибка! В названии улицы могут быть только буквы (русские или английские), нижнее почеркивание, дефис, пробелы.';
                    }
                } else {
                    $error[2]='has-error';
                    $messageError[2] = 'Заполните название Вашей улицы.';
                }
                if (!empty($_POST['house_number'])) {
                    if ($this->validForm('house_number',trim($request->post('house_number')))){
                        $order->user_house_number = strip_tags(trim($request->post('house_number')));
                    } else {
                        $error[3]='has-error';
                        $messageError[3] = 'Ошибка! В номере дома могут быть только цифры и буквы (русские или английские), "/", дефис, пробелы.';
                    }
                } else {
                    $error[3]='has-error';
                    $messageError[3] = 'Заполните номер Вашего дома.';
                }
                if (!empty($_POST['apartment_number'])) {
                    if ($this->validForm('apartment_number',trim($request->post('apartment_number')))){
                        $order->user_apartment_number = strip_tags(trim($request->post('apartment_number')));
                    } else {
                        $error[4]='has-error';
                        $messageError[4] = 'Ошибка! В номере квартиры могут быть только цифры и буквы (русские или английские), "/", дефис, пробелы.';
                    }
                } else {
                    $error[4]='has-error';
                    $messageError[4] = 'Заполните номер Вашей квартиры.';
                }
                $order->user_comment = strip_tags($request->post('comment'));
                $order->total_price = $request->post('orderTotalPrise');

                $id_order = $orders->idOrderProduct()['MaxId']+1;
                $product_carts = json_decode($_COOKIE['product_cart'], true);

                foreach ($product_carts as $productId => $amountProduct) {
                    $purchase = new stdClass();
                    $purchase->order_id = $id_order;
                    $purchase->product_id = (int)$productId;

                    $priceProduct = $variants->getVariant($productId)['price'];
                    $sale_price = $variants->getVariant($productId)['sale_price'];
                    if (!empty($priceProduct)){
                        $purchase->price = $priceProduct;
                    } else {
                        if (!empty($sale_price)) {
                            $purchase->price = (int)$sale_price;
                        } else {
                            $purchase->price = 0;
                        }
                    }
                    
                    $purchase->amount = (int)$product_carts[$productId];
                    $purchase->product_name = $products->getProduct($productId)['name'];
                    $purchase->variant_id = $variants->getVariant($productId)['id'];
                    $purchase->variant_name = $variants->getVariant($productId)['name']; 
                    
                    if ($request->post('idPurchase','integer')) {
                        $id_purchas = $purchases->updatePurchases($request->post('idPurchase','integer'), $purchase);
                    } else {
                        $id_purchas = $purchases->addPurchases($purchase);
                    }
                    $purchase = $purchases->getPurchases($id_purchas);
                    $array_vars['purchase' ] = $purchase;   
                }

                if ($request->post('idOrder','integer')) {
                    $id_order = $orders->updateOrder($request->post('idOrder','integer') , $order);
                } else {
                    $order->date_create = gmdate('Y-m-d H:i:s');
                    $id_order = $orders->addOrder($order);
                }              

                if (!empty($error)) {
                    $displayCSSorder = 'none';
                    $displayCSSuser = 'block';
                    $array_vars['error'] = $error;
                    $array_vars['messageError'] = $messageError;
                    $order = $orders->getOrder($id_order);
                    $array_vars['order' ] = $order;

                } else {
                    setcookie('product_cart', json_encode($product_cart), time()-3600*24*30,'/');
                    header( 'Location: /order_made');//сообщение  о  заказе
                }
            }
            $array_vars['displayCSSorder' ] = $displayCSSorder;
            $array_vars['displayCSSuser' ] = $displayCSSuser;
        } else {
            $message = 'Корзина пуста.';
            $array_vars['message'] = $message;
        }

        if ($request->method() == 'POST' && isset($_POST['exitUser']))  {
            unset($_SESSION['id_user']);
            $sessionUser = '';
            $name = '';
        } else {
            if (isset($_SESSION['id_user'])) {
                $sessionUser = $_SESSION['id_user'];
                $user = $users->getUser($sessionUser);
                $name = $user['name'];
                $user = $users->getUser($sessionUser);
                $array_vars['user'] = $user;
            } else {
                $name = '';
                $sessionUser = '';
            }  
        }
        
        $array_vars['name'] = $name;
        $array_vars['sessionUser'] = $sessionUser;
        return $this->view->render('viewCart.html',$array_vars);
    }   
}