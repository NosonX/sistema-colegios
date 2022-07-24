<?php

namespace app\controllers;

use app\core\Controller;

class PageController extends Controller{
    public function home() {
        session_start();
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
            $this->redirect('/'.$_SESSION['role']);
        } else {
            $this->render('login.tpl');
        }
    }
}