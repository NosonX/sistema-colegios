<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;

class PagesController extends Controller{

    public function home() {
        $admin = Admin::find(1);

        $this->render(
            'Home.tpl',
            [
                'nombre' => 'Eduardo',
                'apellido' => 'Alfaro'
            ]
        );
    }
}