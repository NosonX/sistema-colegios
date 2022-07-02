<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;

class AdminUsersController extends Controller {
    public function create() {
        $admin = new Admin();
        $admin->email = $_POST['email'];
        $admin->clave = $_POST['password'];
        $admin->save();

        header("Location: ".$_SERVER['HTTP_REFERER'], TRUE, 302);
        die();
    }

    public function delete($id) {
        $result = Admin::delete($id);
        header("Location: ".$_SERVER['HTTP_REFERER'], TRUE, 302);
        die();
    }
}