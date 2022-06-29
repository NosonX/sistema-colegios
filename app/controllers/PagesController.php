<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;

class PagesController extends Controller{

    public function home() {

        /* WHERE
            $admin = Admin::where("email='creado@conorm.com'");
        */

        /* BUSCAR
            $admin = Admin::find(1);
        */

        /* CREAR
            $admin = new Admin();
            $admin->email = 'crear@nuevo.com';
            $admin->clave = 12345;
            $id = $admin->save(); // returns id of created object
        */


        /* ACTUALIZAR
            $admin = Admin::find(5);
            $admin->email = 'actualizar2@actualizar.com';
            $admin->save();
        */

        /* ELIMINAR
            $deletedAdmin = Admin::delete(10);
            var_dump($deletedAdmin);
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