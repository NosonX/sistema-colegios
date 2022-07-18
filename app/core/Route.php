<?php

namespace app\core;

class Route {
    private string $httpMethod;
    private string $uri;
    private string $controller;
    private string $method;
    private $middleware;

    public function __construct(string $httpMethod, string $uri, string $controller, string $method, $middleware = null)
    {
        $this->httpMethod = $httpMethod;
        $this->uri = $uri;
        $this->controller = $controller;
        $this->method = $method;
        $this->middleware = $middleware;
    }


    /**
     * @return string
     */
    public function getHttpMethod(): string
    {
        return $this->httpMethod;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    public function getMiddleware()
    {
        return $this->middleware;
    }
}