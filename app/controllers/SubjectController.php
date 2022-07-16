<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Subject;

class SubjectController extends Controller {
    public function create() {
        $subject = new Subject();
        $subject->nombre = $_POST['nombre'];
        $subject->nivel_id = $_POST['nivel_id'];
        $subject->profesor_id = $_POST['profesor_id'];
        $subject->save();
        $this->redirect('admin/asignaturas');
    }

    public function update($id) {
        $subject = Subject::find($id);
        $subject->nombre = $_POST['nombre'];
        $subject->nivel_id = $_POST['nivel_id'];
        $subject->profesor_id = $_POST['profesor_id'];
        $subject->save();
        $this->redirect('admin/asignaturas');
    }

    public function delete($id) {
        $result = Subject::delete($id);
        $this->redirect('admin/asignaturas');
    }
}