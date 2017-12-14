<?php
class Users extends Database
{   
    public function addUser($user)
    {
        if(empty($user)) {
            return false;
        }

        foreach ($user as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO users ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }
    public function updateUser($id, $user)
    {
        if(empty($id)) {
            return false;
        }

        foreach ($user as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $query = "UPDATE users SET $colum_sql WHERE id = $id";
        $this->query($query);
        return $id;
    }
    public function getUser($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, name, phone, email, city, password, status FROM users WHERE id = '$id'";
        $this->query($query);
        return $this->result();
    }
    public function getCountUserEmail($email)
    {
        if(empty($email)) {
            return false;
        }

        $query = "SELECT count(*) as 'number' FROM users WHERE email = '$email'";
        $this->query($query);
        return $this->result();
    }
    public function getUserEmail($email)
    {
        if(empty($email)) {
            return false;
        }

        $query = "SELECT id, name, phone, email, city, password, status FROM users WHERE email = '$email'  LIMIT 1";
        $this->query($query);
        return $this->result();
    }
}