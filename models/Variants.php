<?php
class Variants extends Database
{
    public function idVariant()
    {
        $query = "SELECT MAX(`Id`) as MaxId FROM `variants`";
        $this->query($query);
        return $this->result();
    }
      
    public function addVariant($variant)
    {
        if(empty($variant)) {
            return false;
        }
        
        foreach ($variant as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO variants ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }

    public function getVariant($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, name, product_id, price, sku, stock, sale_price FROM variants WHERE product_id = '" . $id . "'  LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    
    public function getVariantProduct($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, name, product_id, price, sku, stock, sale_price FROM variants WHERE product_id = $id LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    public function getCountVariantProduct($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT count(*) AS 'number' FROM variants WHERE product_id = $id";
        $this->query($query);
        return $this->result();
    }
    
    public function getVariants()
    {

        $query = "SELECT id, name, product_id, price, sku, stock, sale_price FROM variants";
        $this->query($query);
        return $this->results();
    }

    public function updateVariant($id, $variant)
    {
        if(empty($id)) {
            return false;
        }

        foreach ($variant as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $query = "UPDATE variants SET $colum_sql WHERE id = $id";
        $this->query($query);
        return $id;
    }

    public function deleteVariant($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "DELETE FROM variants WHERE product_id = $id";
        $this->query($query);
        return $id;
    }

    public function truncateVariant()
    {
        $query = "TRUNCATE TABLE variants";
        $this->query($query);
        return $id;   
    }
}