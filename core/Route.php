<?php
class Route
{
    public static function run()
    {
        $models_dir = 'models/';
        $controllers_dir = 'controllers/';
        $controller_name = null;
        
        $uri = parse_url($_SERVER['REQUEST_URI']);

        $uri_array = array( 
            '/' => 'ControllerProducts',
            '/page' => 'ControllerPage',
            '/product' => 'ControllerProduct',
            '/category' => 'ControllerCategory',
            '/registration' =>'ControllerRegistration',
            '/cart' => 'ControllerCart',
            '/authorization' => 'ControllerAuthorization',
            '/order_made' => 'ControllerOrderMade',
            '/page404' => 'ControllerError404',
        );

        $uri['var'] = array_slice(explode('/', $uri['path']), 1);
        
        if (isset($uri['var'][0])) {
            // handle ajax
            if ($uri['var'][0] == 'api') {
                $uri['var'] = array_slice($uri['var'], 1);
                $method = $uri['var'][1];
            } elseif (isset($uri['var'][1]) && !empty($uri['var'][1])) {
                $method = 'fetch_param';
                // $needParams = true; // handle if method should called with params
            } else {
                $method = 'fetch';
            }

            if ($uri['var'][0] == '') {
                $real_path = '/';
                $controller_name = $uri_array[$real_path];
            } else {
                $real_path = '/' . $uri['var'][0];
                $controller_name = $uri_array[$real_path];
            }          

            $controller_name = $uri_array[$real_path];
            if (in_array($real_path,$uri_array)){
                $controller_name = $uri_array[$real_path];
            } 

            if (file_exists($controllers_dir . $controller_name . '.php')) {

                require $controllers_dir . $controller_name . '.php';
                $controller = new $controller_name();

                if (method_exists($controller, $method)){
                    if ($method == 'fetch_param') {
                        print $controller->$method($uri['var'][1]);
                    } else {
                        print $controller->$method();
                    }
                } else {
                    Route::error404();
                }
            } else {
                Route::error404();
            }
        }
    }

    public static function error404()
    { 
        header('Location: /page404');
    }  
}