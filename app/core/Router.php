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
        $uriParams = $this->getParams();
        $routeFound = false;

        foreach ($routes as $route) {
            if ($this->validateUri($uri, $route->getUri())) {
                $routeFound = $route;
                break;
            }
        }

        if ($routeFound !== false) {
            $controller = $routeFound->getController();
            $method = $routeFound->getMethod();
            $uriParams = $this->getUriParams($uri, $routeFound->getUri());
            (new $controller)->$method(...$uriParams);
        } else {
            echo 'ERROR 404';
        }
    }

    public function getParams(): array {
        return array_filter($_REQUEST, fn ($key) => $key != 'uri', ARRAY_FILTER_USE_KEY);
    }

    public function validateUri($requestUri, $routeUri): bool {
        $hasVariable = strpos($routeUri, '$') !== false;

        if ($hasVariable) {
            $requestUri = explode('/', $requestUri);
            $routeUri =  explode('/', $routeUri);

            if (sizeof($requestUri) === sizeof($routeUri)) {
                $isEqual = true;

                foreach ($requestUri as $index => $value) {
                    if ($value !== $routeUri[$index]) {
                        $isEqual = strpos($routeUri[$index], '$') !== false;
                    }
                }

                return $isEqual;
            }

            return false;
        }
        else {
            return $requestUri === $routeUri;
        }
    }

    public function getUriParams($requestUri, $routeUri): array {
        $requestUri = explode('/', $requestUri); // [admins, 1, actualizar]
        $routeUri =  explode('/', $routeUri); // [admins, $id, actualizar]
        $uriParams = [];

        foreach ($routeUri as $index => $value) {
            if (strpos($value, '$') !== false) {
                $uriParams[] = $requestUri[$index];
            }
        }

        return $uriParams;
    }
}