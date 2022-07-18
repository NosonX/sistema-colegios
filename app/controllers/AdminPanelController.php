<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;
use app\models\Level;
use app\models\Schedule;
use app\models\Teacher;
use app\models\Student;
use app\models\Subject;

class AdminPanelController extends Controller {
    public function dashboard() {
        $this->render('panels/admin/AdminPanel.tpl');
    }

    public function admins() {
        $admins = Admin::findAll();
        $this->render('panels/admin/administrators/admins.tpl', ['admins' => $admins->toArray()]);
    }

    public function levels() {
        $levels = Level::findAll();
        $this->render('panels/admin/Levels.tpl', ['levels' => $levels->toArray()]);
    }

    public function teachers() {
        $teachers = Teacher::findAll();
        $this->render('panels/admin/Teachers.tpl', ['teachers' => $teachers->toArray()]);
    }

    public function students() {
        $students = Student::findAll('withLevel');
        $levels = Level::findAll();
        $this->render('panels/admin/Students.tpl', [
            'students' => $students->toArray(),
            'levels' => $levels
        ]);
    }

    public function subjects() {
        $subjects = Subject::findAll('withLevel', 'withTeacher');
        $levels = Level::findAll();
        $teachers = Teacher::findAll();
        $this->render('panels/admin/Subjects.tpl', [
            'subjects' => $subjects->toArray(),
            'levels' => $levels,
            'teachers' => $teachers
        ]);
    }

    public function schedules() {
        $schedules = Schedule::findAll('withSubject');
        $subjects = Subject::findAll('withLevel');
        $this->render('panels/admin/Schedules.tpl', [
            'schedules' => $schedules->toArray(),
            'subjects' => $subjects->toArray()
        ]);
    }
}