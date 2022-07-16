<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Admin;

class AuthController extends Controller {
    public function login() {
        session_start();
        $email = $_REQUEST['email'] ?? '';
        $pass = $_REQUEST['clave'] ?? '';

        $validCredentials = false;

        if ($email !== '') {
            $user = Admin::where('email="'.$email.'"');
            if (count($user) > 0) {
                $validCredentials = $user[0]->clave === $pass;
            }
        }

        if ($validCredentials) {
            $_SESSION['loggedIn'] = true;
            $this->redirect($_SERVER['HTTP_REFERER']."admin");
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