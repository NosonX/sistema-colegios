<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Schedule;

class ScheduleController extends Controller {
    public function create() {
        $schedule = new Schedule();
        $schedule->dia = $_POST['dia'];
        $schedule->horaInicio = $_POST['horaInicio'];
        $schedule->horaFin = $_POST['horaFin'];
        $schedule->asignatura_id = $_POST['asignatura_id'];
        $schedule->save();
        $this->redirect('admin/horarios');
    }

    public function update($id) {
        $schedule = Schedule::find($id);
        $schedule->dia = $_POST['dia'];
        $schedule->horaInicio = $_POST['horaInicio'];
        $schedule->horaFin = $_POST['horaFin'];
        $schedule->asignatura_id = $_POST['asignatura_id'];
        $schedule->save();
        $this->redirect('admin/horarios');
    }

    public function delete($id) {
        $result = Schedule::delete($id);
        $this->redirect('admin/horarios');
    }
}