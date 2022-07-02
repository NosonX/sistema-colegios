<?php

namespace app\controllers;

use app\core\Controller;

class PagesController extends Controller{
    public function home() {
        $this->render('Home.tpl');
    }
}