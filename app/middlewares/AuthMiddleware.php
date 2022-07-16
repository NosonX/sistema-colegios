<?php

namespace app\middlewares;

class AuthMiddleware {
    public static function run($callback) {
        session_start();
        $isAuth = $_SESSION['loggedIn'] ?? false;
        if ($isAuth) {
            $callback();
        } else {
            echo 'Error 403 Usted not tiene acceso.';
        }
    }
}