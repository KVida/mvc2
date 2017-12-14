<?php
class productCategories extends Database
{
    private $all_categories;
    private $categories_tree;
    
   
    public function addProductCategory($category)
    {
        if(empty($category)) {
            return false;
        }

        foreach ($category as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO product_categories ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }

    public function getProductCategories()
    {
        $query = "SELECT id, product_id, category_id FROM product_categories";
        $this->query($query);
        return $this->results();
    }

    public function getProductCategory($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, product_id, category_id FROM product_categories WHERE product_id = $id LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getProductCategoryCountId($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT count(*) AS 'number' FROM product_categories WHERE category_id = $id";
        $this->query($query);
        return $this->result();
    }

    public function getProductCategoryId($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, product_id, category_id FROM product_categories WHERE category_id = $id";
        $this->query($query);
        return $this->results();
    }

    public function updateProductCategory($id, $category)
    {
        if(empty($id)) {
            return false;
        }

        foreach ($category as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $query = "UPDATE product_categories SET $colum_sql WHERE id = $id";
        $this->query($query);
        return $id;
    }
    public function deleteProductCategory($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "DELETE FROM product_categories WHERE product_id = $id";
        $this->query($query);
        return $id;
    }

    public function truncateProductCategory()
    {
        $query = "TRUNCATE TABLE product_categories";
        $this->query($query);
        return $id;   
    }
}