<?php
	class RouteAdmin
	{
		public static function run()
		{
			$controllers_dir = 'controllers/';

			
			$uri = parse_url($_SERVER['REQUEST_URI']);
			$uri_array = array(
				'/admin/' => 'ControllerProductsAdmin',
				'/admin/product/' => 'ControllerProductAdmin',
				//'/admin/products/' => 'ControllerProductsAllAdmin',
            	'/admin/categories/' => 'ControllerCategoriesAdmin',
            	//'/admin/categoriesAll/' => 'ControllerCategoriesAllAdmin',
            	'/admin/category/' => 'ControllerCategoryAdmin',
            	'/admin/page/' => 'ControllerPageAdmin',
            	'/admin/pages/' => 'ControllerPagesAdmin',
            	//'/admin/pagesAll/' =>'ControllerPagesAllAdmin',
            	'/admin/auth/' => 'ControllerAuthAdmin',
			);

			if ($uri['path']) {
				if (file_exists($controllers_dir . $uri_array[$uri['path']] . '.php')) {
					//print_r($uri_array[$uri['path']]);exit;
					require $controllers_dir . $uri_array[$uri['path']] . '.php';
					$controller = new $uri_array[$uri['path']]();
					//print_r($controller);exit;
					if (method_exists($controller, 'fetch')){
						print $controller->fetch();
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
			echo "<h1> 404 error </h1>";
		}
		
	}