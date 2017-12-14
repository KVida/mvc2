<?php
class Products extends Database
{
    public function queryCountTableProducts()
    {
        $query = "SELECT count(*) AS 'number' FROM `products` WHERE visible = 1";
        $this->query($query);
        return $this->result();
    }

    public function countTableProducts() 
    {
        return $this->queryCountTableProducts()['number'];
    }

    public function declensionOfTheWordProduct() 
    {
        $numberCount = $this->countTableProducts();
        if ( $numberCount == 0) {
            $res = "0 товаров";
        } else {
            $number_of_products_hundred = abs($numberCount)%100;
            $number_of_products_ten = $numberCount%10;

            if ($number_of_products_hundred > 10 && $number_of_products_hundred < 20) {
                $res = "$numberCount товаров";
            } elseif ($number_of_products_ten > 1 && $number_of_products_ten < 5) {
               $res = "$numberCount товарa"; 
            } elseif ($number_of_products_ten == 1) {
                $res = "$numberCount товар";   
            } else {
                $res = "$numberCount товаров";                
            }
            
        }  
        return $res;             
    }
    
    public function querySelectVisTableProducts()
    {
        $query = "SELECT p.id, p.image, p.name,p.visible, v.price, v.stock FROM products p INNER JOIN variants v ON p.id=v.product_id  WHERE p.visible = 1";
        $this->query($query);
        return $this->results();
    }

    public function selectVisTableProducts() 
    {
        return $this->querySelectVisTableProducts();
    }
    
    public function querySelectAllTableProducts()
    {
        $query = "SELECT p.id, p.image, p.name,p.visible, v.price, v.stock FROM products p INNER JOIN variants v ON p.id=v.product_id";
        $this->query($query);
        return $this->results();
    }

    public function selectAllTableProducts() 
    {
        return $this->querySelectAllTableProducts();
    }

    public function idProduct()
    {
        $query = "SELECT MAX(`id`) as MaxId FROM `products`";
        $this->query($query);
        return $this->result();
    }

    public function addProduct($product)
    {
        if(empty($product)) {
            return false;
        }
        
        foreach ($product as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO products ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }

    public function getProduct($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, name, description, url, visible, image FROM products WHERE id = $id LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    public function getProductVis($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, name, description, url, visible, image FROM products WHERE id = $id AND visible=1 LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getProductCount($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT count(*) AS 'number' FROM products WHERE id = $id  AND visible=1";
        $this->query($query);
        return $this->result();
    }

    public function getProductUrl($url)
    {
        if(empty($url)) {
            return false;
        }
    
        $query = "SELECT id, name, description, url, visible, image FROM products WHERE url = '$url/' LIMIT 1";
        $this->query($query);
        return $this->result();
    }
   
    public function getProductCountUrl($url)
    {
        if(empty($url)) {
            return false;
        }
    
        $query = "SELECT count(*) AS 'number' FROM products WHERE url = '$url/'";
        $this->query($query);
        return $this->result();
    }
    
    public function getProductCountName($name)
    {
        if(empty($name)) {
            return false;
        }
    
        $query = "SELECT count(*) AS 'number' FROM products WHERE name = '$name'";
        $this->query($query);
        return $this->result();
    }
    public function getProductName($name)
    {
        if(empty($name)) {
            return false;
        }
    
        $query = "SELECT id, name, visible, image, url, description FROM products WHERE name = '$name' LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    
    public function getProducts()
    {

        $query = "SELECT id, name, visible, image, url, description FROM products";
        $this->query($query);
        return $this->results();
    }
    public function getProductsAll()
    {

        $query = "SELECT id, name, visible, image, url, description FROM products WHERE visible=1";
        $this->query($query);
        return $this->results();
    }

    public function updateProduct($id, $product)
    {
        if(empty($id)) {
            return false;
        }

        foreach ($product as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $query = "UPDATE products SET $colum_sql WHERE id = $id";
        $this->query($query);
        return $id;
    }

    public function deleteProduct($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "DELETE FROM products WHERE id = $id";
        $this->query($query);
        return $id;
    }

    public function truncateProduct()
    {
        $query = "TRUNCATE TABLE products";
        $this->query($query);
        return $id;   
    }
}