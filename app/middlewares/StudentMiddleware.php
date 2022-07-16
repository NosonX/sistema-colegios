<?php

namespace app\middlewares;
use app\utils\Constants;

class StudentMiddleware {
    public static function run($callback) {
        session_start();
        $isAuth = $_SESSION['loggedIn'] ?? false;
        $isAdmin = $_SESSION['role'] === Constants::$STUDENT_ROLE;
        if ($isAuth && $isAdmin) {
            $callback();
        } else {
            echo 'Error 403 Usted not tiene acceso.';
        }
    }
}