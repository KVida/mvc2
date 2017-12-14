<?php
class Users_admin extends Database
{

    public function getUserAdmin($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, name, email, pass FROM users_admin WHERE id='$id'  LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getUserAdminName($name)
    {
        if(empty($name)) {
            return false;
        }

        $query = "SELECT id, name, email, pass FROM users_admin WHERE name='$name' LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getUserAdminCountName($name)
    {
        if(empty($name)) {
            return false;
        }
    
        $query = "SELECT count(*) AS 'number' FROM users_admin WHERE name='$name'";
        $this->query($query);
        return $this->result();
    }
}