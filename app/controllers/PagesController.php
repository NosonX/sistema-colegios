<?php

namespace app\controllers;

use app\core\Controller;
use app\models\AdminModel;

class PagesController extends Controller{

    public function home() {
        AdminModel::where('id IN (1)');

        $this->render(
            'Home.tpl',
            [
                'nombre' => 'Eduardo',
                'apellido' => 'Alfaro'
            ]
        );
    }
}