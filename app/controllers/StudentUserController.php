<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Student;

class StudentUserController extends Controller {
    function create() {
        $student = new Student();
        $student->clave = $_POST['clave'];
        $student->nombre = $_POST['nombre'];
        $student->apellidos = $_POST['apellidos'];
        $student->login = $_POST['login'];
        $student->nivel_id = $_POST['nivel_id'];
        $student->save();
        $this->redirect('admin/estudiantes');
    }

    function update($id) {
        $student = Student::find($id);
        $student->clave = $_POST['clave'];
        $student->nombre = $_POST['nombre'];
        $student->apellidos = $_POST['apellidos'];
        $student->nivel_id = $_POST['nivel_id'];
        $student->save();
        $this->redirect('admin/estudiantes');
    }

    function delete($id) {
        $result = Student::delete($id);
        $this->redirect('admin/estudiantes');
    }
}
