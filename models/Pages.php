<?php
class Pages extends Database 
{
    public function idPage()
    {
        $query = "SELECT MAX(`id`) as MaxId FROM `pages`";
        $this->query($query);
        return $this->result();
    }

    public function addPage($page)
    {
        if(empty($page)) {
            return false;
        }

        foreach ($page as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO pages ($colum_sql) VALUES ($val_sql)";
        $this->query($query);
        return $this->resId();
    }

    public function getPage($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "SELECT id, title, description, url, visible, textpage FROM pages WHERE id = $id LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getPageSrt($string)
    {
        if(empty($string)) {
            return false;
        }

        $query = "SELECT id, title, description, url, visible, textpage FROM pages WHERE url = '$string' LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getCountPageSrt($string)
    {
        if(empty($string)) {
            return false;
        }

        $query = "SELECT count(*) AS 'number' FROM pages WHERE url = '$string' AND visible = 1 LIMIT 1";
        $this->query($query);
        return $this->result();
    }

    public function getPagesVis()
    {

        $query = "SELECT id, title, description, url, visible, textpage FROM pages WHERE visible = 1";
        $this->query($query);
        return $this->results();
    }

    public function getPagesNOVis()
    {

        $query = "SELECT id, title, description, url, visible, textpage FROM pages WHERE visible = 0";
        $this->query($query);
        return $this->results();
    }
    
    public function getPagesAll()
    {

        $query = "SELECT id, title, description, url, visible, textpage FROM pages";
        $this->query($query);
        return $this->results();
    }
    public function getPageCountName($title)
    {
        if(empty($title)) {
            return false;
        }
    
        $query = "SELECT count(*) AS 'number' FROM pages WHERE title = '$title'";
        $this->query($query);
        return $this->result();
    }
    public function getPageCountUrl($url)
    {
        if(empty($url)) {
            return false;
        }
    
        $query = "SELECT count(*) AS 'number' FROM pages WHERE url = '$url'";
        $this->query($query);
        return $this->result();
    }

    public function updatePage($id, $page)
    {
        if(empty($id)) {
            return false;
        }

        foreach ($page as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $query = "UPDATE pages SET $colum_sql WHERE id = $id";
        $this->query($query);
        return $id;
    }

    public function deletePage($id)
    {
        if(empty($id)) {
            return false;
        }

        $query = "DELETE FROM pages WHERE id = $id";
        $this->query($query);
        return $id;
    }

    public function truncatePage()
    {
        $query = "TRUNCATE TABLE pages";
        $this->query($query);
        return $id;   
    }

    public function querySelectNameTablePages()
    {
        $query = "SELECT id, title, url,visible FROM pages";
        $this->query($query);
        return $this->results();
    }

    public function selectNameTablePages() 
    {
        return $this->querySelectNameTablePages();
    }

    public function querySelectNameTablePagesVis()
    {
        $query = "SELECT id, title, url FROM pages  WHERE visible = 1";
        $this->query($query);
        return $this->results();
    }

    public function selectNameTablePagesVis() 
    {
        return $this->querySelectNameTablePagesVis();
    }

}