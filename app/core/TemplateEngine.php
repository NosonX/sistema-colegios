<?php

namespace app\core;

use Smarty;

class TemplateEngine {
    private Smarty $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->initialize();

    }

    private function initialize(): void {
        $this->smarty->setTemplateDir(__DIR__ . '/../views/templates');
        $this->smarty->setConfigDir(__DIR__ . '/../views/config');
        $this->smarty->setCompileDir(__DIR__ . '/../views/templates_c');
        $this->smarty->setCacheDir(__DIR__ . '/../views/cache');
    }

    public function assign($key, $value): void {
        $this->smarty->assign($key, $value);
    }

    public function display($file): void {
        $this->smarty->display($file);
    }
}