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

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function addRoute(Route $route) {
        $this->routes[$route->getHttpMethod()][] = $route;
    }

    public function get($uri, $controller, $method, $middleware = null): void
    {
        $this->addRoute(new Route(HttpMethod::$GET, $uri, $controller, $method, $middleware));
    }

    public function post($uri, $controller, $method, $middleware = null): void
    {
        $this->addRoute(new Route(HttpMethod::$POST, $uri, $controller, $method, $middleware));
    }

    public function run() {
        $uri = $this->getUri();
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
            $middleware = $routeFound->getMiddleware();
            $uriParams = $this->getUriParams($uri, $routeFound->getUri());

            if (isset($middleware) && $middleware !== null) {
                $callback = function () use ($controller, $method, $uriParams) {
                    (new $controller)->$method(...$uriParams);
                };
                $middleware::run($callback);
            } else {
                (new $controller)->$method(...$uriParams);
            }


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
                    if ($isEqual) {
                        $isEqual = $value === $routeUri[$index];
                        if (!$isEqual) {
                            $isEqual = strpos($routeUri[$index], '$') !== false;
                        }
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

    public function getUri(): string {
        $uri = '/'.($_REQUEST['uri'] ?? '');

        if (strlen($uri) > 1 && substr($uri, -1) == '/') {
            $uri = substr_replace($uri, '', -1);
        }

        return $uri;
    }

    public function group($uri, $routes, $middleware = null) {
        foreach ($routes as $route) {
            $this->{$route[0]}($uri.$route[1], $route[2], $route[3], $middleware);
        }
    }
}