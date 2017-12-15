<?php 
class ModelAdmin extends DataBase
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
            return "0 товаров";
        } else {
            $number_of_products_hundred = abs($numberCount)%100;
            $number_of_products_ten = $numberCount%10;

            if ($number_of_products_hundred > 10 && $number_of_products_hundred < 20) {
                return "$numberCount товаров";
            } elseif ($number_of_products_ten > 1 && $number_of_products_ten < 5) {
               return "$numberCount товарa"; 
            } elseif ($number_of_products_ten == 1) {
                return "$numberCount товар";   
            } else {
                return "$numberCount товаров";                
            }
            
        }               
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
}