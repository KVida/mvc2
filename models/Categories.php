<?php
class Categories extends Database
{
    private $all_categories;
    private $categories_tree;

    public function idCategory()
    {
        $query = "SELECT MAX(`id`) as MaxId FROM `categories`";
        $this->query($query);
        return $this->result();
    }
    
   
    public function addCategory($category)
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

        $query = "INSERT INTO categories ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }

    public function getCategory($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, name, description, parent_id, url, visible, image FROM categories WHERE id = '$id'  LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    public function getCategoryUrl($url)
    {
        if(empty($url)) {
            return false;
        }

        $query = "SELECT id, name, description, parent_id, url, visible, image FROM categories WHERE url = '$url' AND visible=1 LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getCategoryCountUrl($url)
    {
        if(empty($url)) {
            return false;
        }
    
        $query = "SELECT count(*) AS 'number' FROM categories WHERE url = '$url' AND visible=1";
        $this->query($query);
        return $this->result();
    }
    
    public function getCategoryCountName($name)
    {
        if(empty($name)) {
            return false;
        }
    
        $query = "SELECT count(*) AS 'number' FROM categories WHERE name = '$name'";
        $this->query($query);
        return $this->result();
    }

    public function updateCategory($id, $category)
    {
        if(empty($id)) {
            return false;
        }

        foreach ($category as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }
        
        $colum_sql = implode(',',$columns);
        $query = "UPDATE categories SET $colum_sql WHERE id=$id";
        $this->query($query);
        return $id;
    }

    public function selectNameANDParentIDTableCategories()
    {
        $query = "SELECT id, parent_id, name, url FROM categories WHERE visible = 1"; 
        $result= $this->query($query);
              
            $categoriesArray = array();
             while($categor =  $result->fetch_assoc()){
                $categoriesArray_ID[$categor['id']][] = $categor;
                $categoriesArray[$categor['parent_id']][$categor['id']] =  $categor;
            }
        return $categoriesArray;
    }
    
    public function selectNameANDParentIDTableCategoriesVis()
    {
        $query = "SELECT id, parent_id, name, visible FROM categories"; 
        $result= $this->query($query);
              
            $categoriesArray = array();
             while($categor =  $result->fetch_assoc()){
                $categoriesArray_ID[$categor['id']][] = $categor;
                $categoriesArray[$categor['parent_id']][$categor['id']] =  $categor;
            }
        return $categoriesArray;
    }

    public function selectNameANDParentIDTableCategoriesAll()
    {
        $query = "SELECT id, parent_id, name FROM categories WHERE visible = 1";
        $result= $this->query($query);
        return $this->results();
    }

    public   function build_tree($treeCategors,$parent_id,$only_parent = false)
    {
        if(is_array($treeCategors) and isset($treeCategors[$parent_id])){
            $tree = '<ul>';
            if($only_parent==false){
                foreach($treeCategors[$parent_id] as $treeCateg) {
                    $tree .= '<li><a class="clickCategory" href="/category/' . $treeCateg['url']. '">' . $treeCateg['name'].'</a>';
                    $tree .=  $this->build_tree($treeCategors,$treeCateg['id']);
                    $tree .= '</li>';
                }
            }elseif(is_numeric($only_parent)){
                $treeCateg = $treeCategors[$parent_id][$only_parent];
                $tree .= '<li>'.$treeCateg['name'];
                $tree .=  $this->build_tree($treeCategors,$treeCateg['id']);
                $tree .= '</li>';
            }
            $tree .= '</ul>';
        } else return null;
        return $tree;
    }
}