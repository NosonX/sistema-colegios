<?php

namespace app\controllers;

use app\core\TemplateEngine;
use Controller;

class PagesController extends Controller{

    public function home() {
        $this->render(
            'Home.tpl',
            [
                'nombre' => 'Eduardo',
                'apellido' => 'Alfaro'
            ]
        );
    }
}