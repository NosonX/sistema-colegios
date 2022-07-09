<?php

namespace app\controllers;

use app\core\Controller;

class AuthController extends Controller {
    public function login() {
        // Lógica para validar usuario y contraseña
        $this->redirect($_SERVER['HTTP_REFERER']."admin");
    }
}