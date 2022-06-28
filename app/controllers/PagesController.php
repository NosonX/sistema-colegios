<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;

class PagesController extends Controller{

    public function home() {

        /* BUSCAR
            $admin = Admin::find(1);
        */

        /* CREAR
            $admin = new Admin();
            $admin->email = 'actualizar2@actualizar.com';
            $admin->clave = 12345;
            $admin->save();
        */

        /* ACTUALIZAR
            $admin = Admin::find(1);
            $admin->email = 'actualizar2@actualizar.com';
            $admin->save();
        */

        $this->render(
            'Home.tpl',
            [
                'nombre' => 'Eduardo',
                'apellido' => 'Alfaro'
            ]
        );
    }
}