<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;

class AdminUserController extends Controller {
    public function create() {
        $admin = new Admin();
        $admin->login = $_POST['login'];
        $admin->email = $_POST['email'];
        $password = password_hash($_POST['clave'], PASSWORD_DEFAULT);
        $admin->clave = $password;
        $admin->save();
        $this->redirect('/admin/administradores');
    }

    public function update($id) {
        $admin = Admin::find($id);
        $admin->login = $_POST['login'];
        $admin->email = $_POST['email'];
        $password = password_hash($_POST['clave'], PASSWORD_DEFAULT);
        $admin->clave = $password;
        $admin->save();
        $this->redirect('/admin/administradores');
    }

    public function delete($id) {
        $result = Admin::delete($id);
        $this->redirect('/admin/administradores');
    }
}