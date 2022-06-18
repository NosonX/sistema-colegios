<?php

class Autoload {
    public function load() {
        $this->loadFiles('core');
        $this->loadFiles('models');
        $this->loadFiles('views');
        $this->loadFiles('controllers');
        $this->loadRoutes();
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