<?php
class Images extends Database
{
    public function idImage()
    {
        $query = "SELECT MAX(`id`) as MaxId FROM `images`";
        $this->query($query);
        return $this->result();
    }

    public function addImages($image)
    {
        if(empty($image)) {
            return false;
        }

        foreach ($image as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO images ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }

    public function getImage($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, product_id, filename FROM images WHERE product_id = $id LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getCountImage($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT count(*) AS 'number' FROM images WHERE product_id = $id";
        $this->query($query);
        return $this->result();
    }

    public function getAllImages()
    {
        $query = "SELECT id, product_id, filename FROM images";
        $this->query($query);
        return $this->results();
    }

    public function getImages($id)
    {
        $query = "SELECT id, product_id, filename FROM images WHERE product_id = $id";
        $this->query($query);
        return $this->results();
    }

    public function updateImage($id, $image)
    {
        if(empty($id)) {
            return false;
        }
        
        foreach ($image as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }
        
        $colum_sql = implode(',',$columns);
        $query = "UPDATE images SET $colum_sql WHERE id = $id";
        $this->query($query);
        return $id;
    }

    public function deleteImage($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "DELETE FROM images WHERE id = $id";
        $this->query($query);
        return $id;
    }
    public function truncateImage()
    {
        $query = "TRUNCATE TABLE images";
        $this->query($query);
        return $id;   
    }
}