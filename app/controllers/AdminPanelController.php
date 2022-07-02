<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;

class AdminPanelController extends Controller {
    public function dashboard() {
        $this->render('panels/AdminPanel.tpl');
    }

    public function admins() {
        $admins = Admin::findAll();
        $this->render('panels/Admins.tpl', ['admins' => $admins]);
    }
}