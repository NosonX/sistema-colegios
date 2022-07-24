<?php

namespace app\controllers;

use app\core\Controller;

class TeacherDashboardController extends Controller {
    public function dashboard() {
        $this->render('dashboards/teacher/teacher_dashboard.tpl');
    }
}