<?php

namespace app\core;

class Route {
    private string $httpMethod;
    private string $uri;
    private string $controller;
    private string $method;

    public function __construct(string $httpMethod, string $uri, string $controller, string $method)
    {
        $this->httpMethod = $httpMethod;
        $this->uri = $uri;
        $this->controller = $controller;
        $this->method = $method;
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
}