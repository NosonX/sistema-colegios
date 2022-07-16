<?php

namespace app\middlewares;

class AuthMiddleware {
    public static function run($callback) {
        $isAuth = false;
        if ($isAuth) {
            $callback();
        } else {
            echo 'Error 403 Usted not tiene acceso.';
        }
    }
}