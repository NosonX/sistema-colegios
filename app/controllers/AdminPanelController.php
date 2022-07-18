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
        $this->render('panels/admin/levels/levels.tpl', ['levels' => $levels->toArray()]);
    }

    public function teachers() {
        $teachers = Teacher::findAll();
        $this->render('panels/admin/teachers/teachers.tpl', ['teachers' => $teachers->toArray()]);
    }

    public function students() {
        $students = Student::findAll('withLevel');
        $levels = Level::findAll();
        $this->render('panels/admin/students/students.tpl', [
            'students' => $students->toArray(),
            'levels' => $levels
        ]);
    }

    public function subjects() {
        $subjects = Subject::findAll('withLevel', 'withTeacher');
        $levels = Level::findAll();
        $teachers = Teacher::findAll();
        $this->render('panels/admin/subjects/subjects.tpl', [
            'subjects' => $subjects->toArray(),
            'levels' => $levels,
            'teachers' => $teachers
        ]);
    }

    public function schedules() {
        $schedules = Schedule::findAll('withSubject');
        $subjects = Subject::findAll('withLevel');
        $this->render('panels/admin/schedules/schedules.tpl', [
            'schedules' => $schedules->toArray(),
            'subjects' => $subjects->toArray()
        ]);
    }
}