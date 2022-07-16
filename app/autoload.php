<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Dotenv\Dotenv;

class Autoload {
    public function load() {
        $this->loadEnv();
        $this->loadFiles('core');
        $this->loadFiles('middlewares');
        $this->loadFiles('models');
        $this->loadFiles('views');
        $this->loadFiles('controllers');
        $this->loadRoutes();
    }

    private function loadEnv() {
        $dotenv = new Dotenv();
        $dotenv->loadEnv(__DIR__.'/../.env');
    }

    private function loadFiles(string $directory) {
        $files = glob(__DIR__ . '/' . $directory . '/*.php');
        foreach ($files as $file) {
            require_once $file;
        }
    }

    private function loadRoutes() {
        require_once __DIR__ . '/routes.php';
    }
}