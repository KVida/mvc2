<?php
class Request extends CoreAdmin
{
    public function method($method = null)
    {
        if(!empty($method))
            return strtolower($_SERVER['REQUEST_METHOD']) == strtolower($method);
        return $_SERVER['REQUEST_METHOD'];
    }
    /**
     * Возвращает переменную _GET, отфильтрованную по заданному типу, если во втором параметре указан тип фильтра
     * Второй параметр $type может иметь такие значения: integer, string, boolean
     * Если $type не задан, возвращает переменную в чистом виде
     */
    public function get($name, $type = null)
    {
        $val = null;
        if(isset($_GET[$name]))
            $val = $_GET[$name];

        if(!empty($type) && is_array($val))
            $val = reset($val);

        if($type == 'string')
            return strval(preg_replace('/[^\p{L}\p{Nd}\d\s_\-\.\%\s]/ui', '', $val));

        if($type == 'integer')
            return intval($val);
        if($type == 'boolean')
            return !empty($val);

        return $val;
    }
    /**
     * Возвращает переменную _POST, отфильтрованную по заданному типу, если во втором параметре указан тип фильтра
     * Второй параметр $type может иметь такие значения: integer, string, boolean
     * Если $type не задан, возвращает переменную в чистом виде
     */
    public function post($name = null, $type = null)
    {
        $val = null;
        if(!empty($name) && isset($_POST[$name]))
            $val = $_POST[$name];
        elseif(empty($name))
            $val = file_get_contents('php://input');

        if($type == 'string')
            return strval(preg_replace('/[^\p{L}\p{Nd}\d\s_\-\.\%\s]/ui', '', $val));

        if($type == 'integer')
            return intval($val);
        if($type == 'boolean')
            return !empty($val);
        return $val;
    }
    /**
     * Возвращает переменную _FILES
     * Обычно переменные _FILES являются двухмерными массивами, поэтому можно указать второй параметр,
     * например, чтобы получить имя загруженного файла: $filename = $simpla->request->files('myfile', 'name');
     */
    public function files($name, $name2 = null)
    {
        if(!empty($name2) && !empty($_FILES[$name][$name2]))
            return $_FILES[$name][$name2];
        elseif(empty($name2) && !empty($_FILES[$name]))
            return $_FILES[$name];
        else
            return null;
    }
//Функция для загузки картинки
    public function checkImage()
    {
        $ext = array("png", "gif", "jpg", "jpeg", "JPG");
        $img_dir = '../uploads/';
        $name = $_FILES['image']['name'];
        $file = $_FILES['image']['tmp_name'];
        
        $file_ext = pathinfo($name,PATHINFO_EXTENSION);
        $base = pathinfo($name, PATHINFO_FILENAME);
        if(in_array($file_ext,$ext)) {
            while (file_exists($img_dir.$name)) {
                $name = $base . rand(1, 50) . '.' . $file_ext;
            }
            $res = move_uploaded_file($file,$img_dir.$name);

            if ($res) {
                return $name;
            } else {
                return 'IMG DONT UPLOAD';
            }
        } else {
            return 'IMG wrong format';
        }
    }   
//функция добавления картинок
    public function checkImages()
    {
        $ext = array("png", "gif", "jpg", "jpeg", "JPG");
        $dir_img = '../uploads/';
        $imgs = $_FILES['productImgs'];
        if(!empty($imgs)) {
            $imgCount = count($imgs['name']);
            for ($i = 0; $i < $imgCount; $i++) {
                $ext_point = (explode(".", $imgs['name'][$i]));
                $ext_img = end($ext_point);

                if (in_array($ext_img, $ext)) {
                    $img_id = count(array_filter(glob($dir_img . '*'), 'is_file'));
                    $new_name_img[$i] = $img_id . $imgs['name'][$i];//$this->translit($imgs['name'][$i])
                    move_uploaded_file($imgs['tmp_name'][$i], $dir_img . $new_name_img[$i]);  
                } 
            }
            return $new_name_img;
        } 
    }
//Функия построения дерева категорий
    public   function build_tree($treeCategors,$parent_id,$only_parent = false)
    {
        if(is_array($treeCategors) and isset($treeCategors[$parent_id])){
            $tree = '<ul>';
            if($only_parent==false){
                foreach($treeCategors[$parent_id] as $treeCateg){
                    $tree .= '<li><a href="/admin/category/?method=edit&id='.$treeCateg['id'] . '">' . $treeCateg['name'].'</a>';
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

    public   function build_tree_all($treeCategors,$parent_id,$only_parent = false)
    {
        if(is_array($treeCategors) and isset($treeCategors[$parent_id])){
            $tree = '<ul>';
            if($only_parent==false){
                foreach($treeCategors[$parent_id] as $treeCateg){
                    if ($treeCateg['visible'] == 1) {
                        $tree .= '<li><a href="/admin/category/?method=edit&id='.$treeCateg['id'] . '">' . $treeCateg['name'].'</a>';
                        $tree .=  $this->build_tree_all($treeCategors,$treeCateg['id']);
                        $tree .= '</li>';
                    } else {
                        $tree .= '<li><a href="/admin/category/?method=edit&id='.$treeCateg['id'] . '">' . $treeCateg['name'].'</a> <small> (Категория не видима)</small>';
                        $tree .=  $this->build_tree_all($treeCategors,$treeCateg['id']);
                        $tree .= '</li>';
                    }
                }
            }elseif(is_numeric($only_parent)){
                $treeCateg = $treeCategors[$parent_id][$only_parent];
                $tree .= '<li>'.$treeCateg['name'];
                $tree .=  $this->build_tree_all($treeCategors,$treeCateg['id']);
                $tree .= '</li>';
            }
            $tree .= '</ul>';
        } else return null;
        return $tree;
    }
}