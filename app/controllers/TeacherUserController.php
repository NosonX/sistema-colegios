<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Teacher;

class TeacherUserController extends Controller {
    function create() {
        $teacher = new Teacher();
        $teacher->login = $_POST['login'];
        $teacher->clave = $_POST['clave'];
        $teacher->nombre = $_POST['nombre'];
        $teacher->apellidos = $_POST['apellidos'];
        $teacher->email = $_POST['email'];
        $teacher->especialista = $_POST['especialista'];
        $teacher->save();
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id) {
        $teacher = Teacher::find($id);
        $teacher->login = $_POST['login'];
        $teacher->clave = $_POST['clave'];
        $teacher->nombre = $_POST['nombre'];
        $teacher->apellidos = $_POST['apellidos'];
        $teacher->especialista = $_POST['especialista'];
        $teacher->save();
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id) {
        $result = Teacher::delete($id);
        $this->redirect($_SERVER['HTTP_REFERER']);
    }
}
