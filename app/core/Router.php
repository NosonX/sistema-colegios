<?php

namespace app\core;

class Router {
    private array $routes;

    public function __construct()
    {
        $this->routes = [
            HttpMethod::$GET => [],
            HttpMethod::$POST => [],
            HttpMethod::$PATCH => [],
            HttpMethod::$PUT => [],
            HttpMethod::$DELETE => []
        ];
    }

    public function addRoute(Route $route) {
        $this->routes[$route->getHttpMethod()][] = $route;
    }

    public function run() {
        $uri = $_REQUEST['uri'] ?? '';
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $routes = $this->routes[$httpMethod];
        $routeFound = false;

        foreach ($routes as $route) {
            if ($uri === $route->getUri()) {
                $routeFound = $route;
            }
        }

        if ($routeFound !== false) {
            $controller = $routeFound->getController();
            $method = $routeFound->getMethod();
            (new $controller)->$method();
        } else {
            echo 'ERROR 404';
        }
    }
}