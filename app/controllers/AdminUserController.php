<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;

class AdminUserController extends Controller {
    public function create() {
        $admin = new Admin();
        $admin->login = $_POST['login'];
        $admin->email = $_POST['email'];
        $admin->clave = $_POST['clave'];
        $admin->save();
        $this->redirect('/admin/administradores');
    }

    public function update($id) {
        $admin = Admin::find($id);
        $admin->login = $_POST['login'];
        $admin->clave = $_POST['clave'];
        $admin->save();
        $this->redirect('/admin/administradores');
    }

    public function delete($id) {
        $result = Admin::delete($id);
        $this->redirect('/admin/administradores');
    }
}