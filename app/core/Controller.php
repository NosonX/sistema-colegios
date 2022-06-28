<?php

namespace app\core;

use app\core\TemplateEngine;

abstract class Controller {
    private TemplateEngine $templateEngine;

    public function __construct()
    {
        $this->templateEngine = new TemplateEngine();
    }

    protected function render($file, $data = []) {
        foreach ($data as $key => $value) {
            $this->templateEngine->assign($key, $value);
        }
        $this->templateEngine->display($file);
    }
}