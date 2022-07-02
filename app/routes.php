<?php

use app\core\Router;
use app\core\Route;
use app\core\HttpMethod;
use app\controllers\PagesController;

$router = new Router();

$router->addRoute(new Route(HttpMethod::$GET, '/', PagesController::class, 'home'));
$router->addRoute(new Route(HttpMethod::$POST, '/', PagesController::class, 'createAdmin'));

// var_dump($router->getRoutes());

//$router->addRoute(new Route(HttpMethod::$GET, '/admins', AdminController::class, 'getAll'));
//$router->addRoute(new Route(HttpMethod::$POST, '/admins', AdminController::class, 'create'));
//$router->addRoute(new Route(HttpMethod::$GET, '/profesores', TeacherController::class, 'getAll'));
//$router->addRoute(new Route(HttpMethod::$GET, '/profesores/$id', TeacherController::class, 'getOne'));

$router->run();