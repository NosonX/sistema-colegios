<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Level;
use app\models\Student;
use app\models\Teacher;

class TeacherDashboardController extends Controller {
    public function dashboard() {
        $this->render('dashboards/teacher/teacher_dashboard.tpl');
    }

    public function students() {
        $students = Student::findAll('withLevel');
        $levels = Level::findAll();
        $this->render('dashboards/admin/students/students.tpl', [
            'students' => $students->toArray(),
            'levels' => $levels
        ]);
    }

    public function teachers() {
        $teachers = Teacher::findAll();
        $this->render('dashboards/admin/teachers/teachers.tpl', ['teachers' => $teachers->toArray()]);
    }

    public function notes() {
        echo "Notes";
    }

    public function attendance() {
        echo "asistencia";
    }
}