<?php
function load($class) {
    if (!empty($class) && is_string($class)) {
        $models_dir = 'models/';
        if (file_exists($models_dir.$class.'.php')) {
            include $models_dir.$class.'.php';
        }
    }
}

spl_autoload_register('load');