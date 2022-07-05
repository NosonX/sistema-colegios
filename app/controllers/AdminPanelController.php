<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;

class AdminPanelController extends Controller {
    public function dashboard() {
        $this->render('panels/admin/AdminPanel.tpl');
    }

    public function admins() {
        $admins = Admin::findAll();
        $this->render('panels/admin/Admins.tpl', ['admins' => $admins]);
    }
}