<?php

namespace app\controllers;

use app\core\Controller;

class PageController extends Controller{
    public function home() {
        $this->render('Login.tpl');
    }
}