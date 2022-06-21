<?php

namespace app\controllers;

use app\models\AdminModel;

class AdminController {
    public function getAll() {
        $model = new AdminModel();
        var_dump($model);

        echo '<br />';
        echo '<br />';
        echo 'Todos los admins';
    }
}