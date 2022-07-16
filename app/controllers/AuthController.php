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

            if (count($user) > 0) $validCredentials = $user[0]->clave === $pass;
            else $role = '';
        }

        if ($validCredentials) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['role'] = $role;

            if ($role === Constants::$ADMIN_ROLE) $this->redirect($_SERVER['HTTP_REFERER']."admin");
            if ($role === Constants::$TEACHER_ROLE) $this->redirect($_SERVER['HTTP_REFERER']."profesor");
            else $this->redirect($_SERVER['HTTP_REFERER']."estudiante");
        } else {
            $this->redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function logout() {
        $publicDir = str_replace('/index.php', '', $_SERVER['PHP_SELF']);
        $url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].str_replace('/public', '', $publicDir);

        session_start();
        session_unset();
        session_destroy();

        $this->redirect($url);
    }
}