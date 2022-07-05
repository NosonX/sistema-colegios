<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;
use app\models\Level;

class AdminPanelController extends Controller {
    public function dashboard() {
        $this->render('panels/admin/AdminPanel.tpl');
    }

    public function admins() {
        $admins = Admin::findAll();
        $this->render('panels/admin/Admins.tpl', ['admins' => $admins]);
    }

    public function levels() {
        $levels = Level::findAll();
        $this->render('panels/admin/Levels.tpl', ['levels' => $levels]);
    }
}