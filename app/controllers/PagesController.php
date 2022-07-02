<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;

class PagesController extends Controller{

    public function home() {
        $admins = Admin::findAll();

        $this->render(
            'Home.tpl',
            [
                'admins' => $admins
            ]
        );
    }

    public function createAdmin() {
        // var_dump($_SERVER['HTTP_REFERER']);
        $admin = new Admin();
        $admin->email = $_POST['email'];
        $admin->clave = $_POST['clave'];
        $admin->save();

        header("Location: http://localhost:8081/sistema-colegios", FALSE, 201);
    }
}