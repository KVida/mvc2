<?php
class ControllerProductAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $variants = new Variants();
        $images = new Images();
        $categories = new Categories();
        $productCategories = new productCategories();
        $request = new Request();

        $product = new stdClass();
        $variant = new stdClass();
        $image =  new stdClass();
        $productCategory =  new stdClass();

        $array_vars = array();

        if($request->method() == 'POST'  && $_POST['name'] != null) {
            $error = array();
            $message = array();

            if ($this->validAdmin('name',strip_tags(trim($request->post('name'))))){
                $product->name = strip_tags(trim($request->post('name')));
                $product->description = $request->post('description');
                $product->visible = $request->post('visible','integer');
                $product->updated = gmdate('Y-m-d H:i:s');

                if (!empty($_FILES['image']['name'])) {
                    $addFile = $request->checkImage();
                    $product->image = $addFile;   
                } else {
                    $product->image = $products->getProduct($request->post('id','integer'))['image'];
                } 

                if($request->post('id','integer')) {
                    if (!empty($product->name)) {
                        $product->url = $this->validUrlAdmin(trim($request->post('url')),trim($request->post('name')),1);
                    } 
                    
                    $id = $products->updateProduct($request->post('id','integer'), $product);

                    $variant->product_id = $request->post('id','integer');

                    $productCategory->product_id = $request->post('id','integer');
                    $productCategory->category_id = $request->post('parent_id');
                } else {
                    if (!empty($product->name)) {
                        $product->url = $this->validUrlAdmin(trim($request->post('url')),trim($request->post('name')),0);
                    }

                    $product->created = gmdate('Y-m-d H:i:s');
                    $id = $products->addProduct($product);

                    $nummber = $products->idProduct();
                    $variant->product_id = (int)$nummber['MaxId'];

                    $productCategory->product_id = (int)$nummber['MaxId'];
                    $productCategory->category_id = $request->post('parent_id');
                }                
                $product = $products->getProduct($id); 

                $arrayImg = array();
                if (is_array($_FILES['productImgs'])){
                    if (!empty($_FILES['productImgs']['name'][0])) {
                       $countImage = count($_FILES['productImgs']['name']);
                        $addFiles = $request->checkImages();

                        for ($i=0; $i < $countImage; $i++) { 
                            $image->id = $images->idImage();
                            $image->product_id = (int)$nummber['MaxId'];
                            $image->filename = $addFiles[$i];
                            $images->addImages($image); 
                            $arrayImg[$i] = $image->filename;
                        } 
                    } else {
                        $countImage = count($images->getImages($id));
                        for ($i=0; $i < $countImage; $i++) { 
                            $arrayImg[$i] = $images->getImages($id)[$i]['filename'];  
                        }
                    }  
                } 
                
                if ($this->validAdmin('nameVariant',trim($request->post('nameVariant')))) {
                    $variant->name = trim($request->post('nameVariant'));
                } else {
                    $error[1] = 'has-error';
                    $message[1] = 'Введите название врианта!! Название может содержать в себе английские и русские буквы, цифры, нижнее подчеркивание, дефис и пробел';
                }

                if ($this->validAdmin('sku',trim($request->post('sku')))) {
                    $variant->sku = trim($request->post('sku'));        
                } else {
                    $error[2] = 'has-error';
                    $message[2] = 'Введите артикул варианта!! Артикул может содержать в себе английские буквы и цифры';
                }

                if (empty(trim($request->post('price')))) {
                    $variant->price = 0;
                } else {
                    if  ($this->validAdmin('price',trim($request->post('price')))) {
                        $variant->price = trim($request->post('price')); 
                    } else {
                        $error[3] = 'has-error';
                        $message[3] = 'Введите цену для даного варианта!! Цена может содержать в себе цифры';
                    }
                }
                
                if (empty(trim($request->post('sale_price')))) {
                    $variant->sale_price = 0;
                } else {
                    if ($this->validAdmin('sale_price',trim($request->post('sale_price'))) ) {
                        $variant->sale_price = trim($request->post('sale_price'));
                    } else {
                        $error[4] = 'has-error';
                        $message[4] = 'Введите новую цену для даного варианта!! Цена может содержать в себе цифры';
                    }
                }

                if ($this->validAdmin('stock',trim($request->post('stock')))) {
                    $variant->stock = trim($request->post('stock'));
                }  else {
                    $error[5] = 'has-error';
                    $message[5] = 'Введите колличество штук для даного варианта!! Колличество может содержать в себе цифры';
                }
                if ($request->post('idVariant','integer')) {
                    $id = $variants->updateVariant($request->post('idVariant','integer'), $variant);
                    $idcat = $productCategories->updateProductCategory($id, $productCategory);
                } else {
                    $id = $variants->addVariant($variant);
                    $idcat = $productCategories->addProductCategory($productCategory);
                }

                $variant = $variants->getVariantProduct($id);
                $productCategory = $productCategories->getProductCategory($idcat);
            } else {
                $error[0] = 'has-error';
                $message[0] = 'Введите название товара!! Название может содержать в себе английские и русские буквы, цифры, нижнее подчеркивание, дефис и пробел'; 
            }

            if (empty($message)) {
                header('Location:/admin/');
            } else {
                $array_vars['product'] = $product;
                $array_vars['variant'] = $variant;
                $array_vars['arrayCategor'] = $productCategory;
                $array_vars['message'] = $message;
                $array_vars['error'] = $error;
            }
        } elseif ($request->method() == 'GET' && isset($_GET['method'])) {
            if ($_GET['method'] == "edit") {
                $array_vars = $this->editProductAdmin($_GET['id']);
                $treeCategors = $categories->selectNameANDParentIDTableCategoriesAll();

                for ($i=0; $i < count($treeCategors); $i++) {
                    if ($treeCategors[$i]['id'] == $array_vars['productCategory']['category_id']) {
                        $treeCategors[$i]['isSelected'] = true;
                        break;
                    }
                }
        
                $array_vars['arrayCategor'] = $treeCategors;
            } elseif ($_GET['method'] == "delete") {
                $this->deleteProductAdmin();
            } elseif ($_GET['method'] == "add") {
                $treeCategors = $categories->selectNameANDParentIDTableCategoriesAll();
                if ($request->post('id','integer')) {
                    $id = (int)$request->post('id');
                    $product = $products->getProduct($id);
                    $variant = $variants->getVariantProduct($id);
                    $productCategory = $productCategories->getProductCategory($id);
                    $array_vars = array(
                        'product' => $product,
                        'variant' => $variant,
                    );
                    for ($i=0; $i < count($treeCategors); $i++) {
                        if ($treeCategors[$i]['id'] == $array_vars['productCategory']['category_id']) {
                            $treeCategors[$i]['isSelected'] = true;
                            break;
                        }
                    }
                } 
                $array_vars['arrayCategor'] = $treeCategors;
            }
        } else {
            $error[0] = 'has-error';
            $message[0] = 'Введите название товара!! Название может содержать в себе английские и русские буквы, цифры, нижнее подчеркивание, дефис и пробел';
            $array_vars = array(
                'message' => $message,
                'error' => $error,
            );
        }
        return $this->view->render('viewProductAdmin.html',$array_vars);
    }

    public function validUrlAdmin($valueUrl,$valueTitle,$param)
    {
        $products = new Products();

        $valueUrl = str_replace('--','-', str_replace('/','-', trim($valueUrl,'/')));
        $id_prod = (int)$products->idProduct()['MaxId'] + 1;
        
        if ($products->getProductCountName($valueTitle)['number'] == $param){
            if(empty($valueUrl)) {
                $res = CoreAdmin::translit($valueTitle) . '/';
            } else {
                if ($this->validAdmin('url',$valueUrl)) {
                    $url = $valueUrl;
                } else {
                    $url = $valueUrl . '/';
                }
                
                if ($products->getProductCountUrl($url)['number'] == $param) {
                    $res = $url;
                } else {
                    $res = $id_prod . '-' . $url;
                } 
            } 
        } else {
            if(empty($valueUrl)) {
                $url = $id_prod . '-' .CoreAdmin::translit($valueTitle) .  '/';
                if ($products->getProductCountUrl($url)['number'] == $param){
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

                if ($products->getProductCountUrl($url)['number'] == $param) {
                    $res = $url;
                } else {
                    $res = $id_prod . '-' . $url;
                }
            }
        }    
        return $res;
    }

    public function editProductAdmin($id)
    {
        $products = new Products();
        $variants = new Variants();
        $productCategories = new productCategories();
        $request = new Request();
        $images = new Images();

        $product = new stdClass();
        $variant = new stdClass();
        $productCategory =  new stdClass();

        $product = $products->getProduct($id);
        $variant = $variants->getVariantProduct($id);
        $productCategory = $productCategories->getProductCategory($id);

        $array_vars = array(
            'product' => $product,
            'variant' => $variant,
            'productCategory'=>$productCategory,
        );

        $countImage = $images->getCountImage($id);

        if ( $countImage['number'] == 0) {
        } else {
            for ($i=0; $i < $countImage['number']; $i++) { 
                $arrayImg[$i] = $images->getImages($id)[$i]['filename'];  
            }   
            $array_vars['arrayImage'] = $arrayImg;
        }          
        return $array_vars;
    }

    public function deleteProductAdmin()
    {
        $products = new Products();
        $variants = new Variants();
        $productCategories = new productCategories();
        $request = new Request();
        $product = new stdClass();
        $variant = new stdClass();
        $productCategory =  new stdClass();

        $id = $request->get('id');
        $product = $products->deleteProduct($id);
        $variant = $variants->deleteVariant($id);
        $productCategory = $productCategories->deleteProductCategory($id);
        header('Location:/admin/');
    }

    public function renderOneProduct($product)
    {  
        $array_vars = array(
            'product' => $product,
        );

        return $this->view->render('viewOneProductAdmin.html',$array_vars);
    } 
}