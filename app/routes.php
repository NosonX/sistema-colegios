<?php

use app\core\Router;
use app\core\Route;
use app\core\HttpMethod;
use app\controllers\PagesController;
use app\controllers\AuthController;
use app\controllers\AdminPanelController;
use app\controllers\AdminUsersController;

$router = new Router();

$router->addRoute(new Route(HttpMethod::$GET, '/', PagesController::class, 'home'));
$router->addRoute(new Route(HttpMethod::$POST, '/login', AuthController::class, 'login'));

$router->addRoute(new Route(HttpMethod::$GET, '/admin', AdminPanelController::class, 'dashboard'));
$router->addRoute(new Route(HttpMethod::$GET, '/admin/administradores', AdminPanelController::class, 'admins'));
$router->addRoute(new Route(HttpMethod::$POST, '/admin/administradores', AdminUsersController::class, 'create'));
$router->addRoute(new Route(HttpMethod::$POST, '/admin/administradores/eliminar/$id', AdminUsersController::class, 'delete'));

$router->run();