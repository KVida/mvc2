<?php
class Purchases extends Database
{   
    public function addPurchases($purchases)
    {
        if(empty($purchases)) {
            return false;
        }

        foreach ($purchases as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO purchases ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }
    public function getPurchases($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT order_id, product_id, price, amount, product_name, variant_id, variant_name FROM purchases WHERE id = '$id'";
        $this->query($query);
        return $this->result();
    }  
    public function updatePurchases($id,$purchases) 
    {
        if(empty($id)) {
            return false;
        }

        foreach ($purchases as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $query = "UPDATE purchases SET $colum_sql WHERE id = $id";
        $this->query($query);
        return $id;

    } 
}