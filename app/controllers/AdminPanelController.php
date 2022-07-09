<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;
use app\models\Level;
use app\models\Teacher;
use app\models\Student;

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

    public function teachers() {
        $teachers = Teacher::findAll();
        $this->render('panels/admin/Teachers.tpl', ['teachers' => $teachers]);
    }

    public function students() {
        $students = Student::findAll();
        $levels = Level::findAll();
        $this->render('panels/admin/Students.tpl', [
            'students' => $students,
            'levels' => $levels
        ]);
    }
}