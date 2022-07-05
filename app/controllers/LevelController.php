<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Level;

class LevelController extends Controller {
    public function create() {
        $level = new Level();
        $level->nivel = $_POST['nivel'];
        $level->curso = $_POST['curso'];
        $level->aula = $_POST['aula'];
        $level->save();
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete($id) {
        $result = Level::delete($id);
        $this->redirect($_SERVER['HTTP_REFERER']);
    }
}