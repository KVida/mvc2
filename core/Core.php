<?php
class Core
{
    public $view = '';

    public $dirTwig = 'theme/html';

    public function __construct()
    {
        require_once 'lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem($this->dirTwig);
        $twig = new Twig_Environment($loader, array(
            'cache'       => 'cache',
            'auto_reload' => true,
        ));
        $this->view = $twig;
    }

    public function validForm($nameInput, $valueInput) 
    {
        switch ($nameInput) {
            case 'name': 
                if (preg_match_all('/^[а-яёa-z]+[а-яёa-z0-9-_-]*$/iu', $valueInput)) {
                    $res = true;
                } else {
                    $res = false;
                }
                break;
            case 'city': 
            case 'street':
                if (preg_match_all('/^[а-яёa-z]+[а-яёa-z0-9-_\s-]*$/iu', $valueInput)) {
                    $res = true;
                } else {
                    $res = false;
                }
                break;
            case 'email': 
                if (preg_match_all('/^[a-z0-9]+([a-z0-9\.-]+)*@([a-z0-9]+)\.([a-z]+){2,}$/i', $valueInput)) {
                    $res = true;
                } else {
                    $res = false;
                }
                break;
            case 'phone': 
                if (preg_match_all('/^\+380\d{3}\d{2}\d{2}\d{2}$/', $valueInput)) {
                    $res = true;
                } elseif (preg_match_all('/^0\d{3}\d{2}\d{2}\d{2}$/', $valueInput)) {
                    $res = true;
                } elseif (preg_match_all('/^\d{5,7}$/', $valueInput)) {
                    $res = true;
                } else {
                    $res = false;
                }
                break;
            case 'password':
            case 'passwordRepeat':
                if (preg_match_all('/^[А-Яа-яЁ-ёA-Za-z0-9-_-]+$/u', $valueInput)) {
                    $res = true;
                } else {
                    $res = false;   
                }
                break;
            case 'house_number':
            case 'apartment_number':
                if (preg_match_all('/^[0-9]+[0-9a-zа-яё\s-\/]*$/ui', $valueInput)) {
                    $res = true;
                } else {
                    $res = false;   
                }
                break;
        }
        return $res;
    }
}