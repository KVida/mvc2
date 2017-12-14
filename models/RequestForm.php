<?php
class RequestForm extends Core
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
}