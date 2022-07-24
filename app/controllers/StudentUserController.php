<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Student;

class StudentUserController extends Controller {
    function create() {
        $student = new Student();
        $password = password_hash($_POST['clave'], PASSWORD_DEFAULT);
        $student->clave = $password;
        $student->nombre = $_POST['nombre'];
        $student->apellidos = $_POST['apellidos'];
        $student->login = $_POST['login'];
        $student->nivel_id = $_POST['nivel_id'];
        $student->save();
        $this->redirect('/admin/estudiantes');
    }

    function update($id) {
        $student = Student::find($id);
        $student->nombre = $_POST['nombre'];
        $student->apellidos = $_POST['apellidos'];
        $student->login = $_POST['login'];
        $student->nivel_id = $_POST['nivel_id'];
        $student->save();
        $this->redirect('/admin/estudiantes');
    }

    function delete($id) {
        $result = Student::delete($id);
        $this->redirect('/admin/estudiantes');
    }
}
