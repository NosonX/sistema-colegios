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

        $uri = $_REQUEST['uri'] ?? '';
        $publicDir = $this->getPublicDir();
        $url = $this->getUrl();

        $this->templateEngine->assign('uri', $uri);
        $this->templateEngine->assign('publicDir', $publicDir);
        $this->templateEngine->assign('url', $url);

        $this->templateEngine->display($file);
    }

    protected function redirect($location) {
        header("Location: ".$this->getUrl().$location, TRUE, 302);
        die();
    }

    protected function getPublicDir(): string {
        return str_replace('/index.php', '', $_SERVER['PHP_SELF']);
    }

    protected function getUrl(): string {
        return $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].str_replace('/public', '', $this->getPublicDir());
    }
}