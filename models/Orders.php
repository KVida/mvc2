<?php
class Orders extends Database
{   
    public function idOrderProduct()
    {
        $query = "SELECT MAX(`Id`) as MaxId FROM `orders`";
        $this->query($query);
        return $this->result();
    }

    public function addOrder($order)
    {
        if(empty($order)) {
            return false;
        }

        foreach ($order as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO orders ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }
    public function getOrder($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id,user_id, user_street, user_city, user_house_number, user_apartment_number, user_comment, date_create, total_price FROM orders WHERE id = '$id' LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getOrderDesc()
    {
        $query = "SELECT id,user_id, user_street, user_city, user_house_number, user_apartment_number, user_comment, date_create, total_price FROM orders ORDER BY id DESC LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function updateOrder($id,$order) 
    {
        if(empty($id)) {
            return false;
        }

        foreach ($order as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $query = "UPDATE orders SET $colum_sql WHERE id = $id";
        $this->query($query);
        return $id;

    }
}