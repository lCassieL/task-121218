<?php
namespace app;
// use controllers\Main as Main;
class Router {

    static function init() {
	$controller_name = 'main';
	$action_name = 'index';
	$routes = explode('/', $_SERVER['REQUEST_URI']);
	if (!empty($routes[1])) {
	    $controller_name = strtolower($routes[1]);
	}
	if (!empty($routes[2])) {
	    $action_name = strtolower($routes[2]);
	}
	$controller_name = ucfirst($controller_name);
	$model_class = 'Articles';
	$controller_class = $controller_name;
	$action = $action_name;
	$model_path = "vendor/models/" . $model_class . '.php';
	if (file_exists($model_path)) {
	    include "$model_path";
	}
	$controller_path = "vendor/controllers/" . $controller_class . ".php";
	if (file_exists($controller_path)) {
	    include $controller_path;
	} else {
	    self::ErrorPage404();
	}
	$controller = new $controller_class;
	if (method_exists($controller, $action)) {
	    $controller->$action();
	} else {
	    self::ErrorPage404();
	}
    }

    static public function ErrorPage404() {
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 not found');
	exit();
    }

}
