<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;
use app\models\Student;
use app\models\Teacher;
use app\utils\Constants;

class AuthController extends Controller {
    public function login() {
        session_start();
        $email = $_REQUEST['email'] ?? '';
        $pass = $_REQUEST['clave'] ?? '';
        $role = Constants::$TEACHER_ROLE;
        $user = null;

        $validCredentials = false;

        if ($email !== '') {
            $where = 'email="'.$email.'"';
            $user = Admin::where($where);
            $role = Constants::$ADMIN_ROLE;

            if (count($user) === 0) {
                $user = Student::where('login="'.$email.'"');
                $role = Constants::$STUDENT_ROLE;
            }

            if (count($user) === 0) {
                $user = Teacher::where($where);
                $role = Constants::$TEACHER_ROLE;
            }

            if (count($user) > 0) $validCredentials = password_verify($pass, $user[0]->clave);
            else $role = '';
        }

        if ($validCredentials) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['role'] = $role;

            if ($role === Constants::$ADMIN_ROLE) $this->redirect("/admin");
            if ($role === Constants::$TEACHER_ROLE) $this->redirect("/profesor");
            else $this->redirect("/estudiante");
        } else {
            $this->redirect('');
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();

        $this->redirect('');
    }
}