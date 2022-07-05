<?php

namespace app\controllers;

use app\core\Controller;

class AuthController extends Controller {
    public function login() {
        // Lógica para validar usuario y contraseña
        header("Location: ".$_SERVER['HTTP_REFERER']."admin", TRUE, 302);
        die();
    }
}