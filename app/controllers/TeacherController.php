<?php

namespace app\controllers;

class TeacherController {
    public function getAll() {
        echo 'Todos los profesores';
    }

    public function getOne() {
        echo 'Profesor: 1';
    }

    public function update($id, $edad) {
        echo 'Actualizar profesor: ' . $id . ' - ' . $edad;
    }
}