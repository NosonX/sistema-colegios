<?php

use app\core\Router;
use app\controllers\PageController;
use app\controllers\AuthController;
use app\controllers\AdminPanelController;
use app\controllers\AdminUserController;
use app\controllers\LevelController;
use app\controllers\TeacherUserController;
use app\controllers\StudentUserController;
use app\controllers\SubjectController;
use app\controllers\ScheduleController;

$router = new Router();

$router->get('/', PageController::class, 'home');
$router->post('/login', AuthController::class, 'login');

$router->get('/admin', AdminPanelController::class, 'dashboard');

$router->get('/admin/administradores', AdminPanelController::class, 'admins');
$router->post('/admin/administradores', AdminUserController::class, 'create');
$router->post('/admin/administradores/eliminar/$id', AdminUserController::class, 'delete');
$router->post('/admin/administradores/actualizar/$id', AdminUserController::class, 'update');

$router->get('/admin/niveles', AdminPanelController::class, 'levels');
$router->post('/admin/niveles', LevelController::class, 'create');
$router->post('/admin/niveles/eliminar/$id', LevelController::class, 'delete');
$router->post('/admin/niveles/actualizar/$id', LevelController::class, 'update');

$router->get('/admin/profesores', AdminPanelController::class, 'teachers');
$router->post('/admin/profesores', TeacherUserController::class, 'create');
$router->post('/admin/profesores/eliminar/$id', TeacherUserController::class, 'delete');
$router->post('/admin/profesores/actualizar/$id', TeacherUserController::class, 'update');

$router->get('/admin/estudiantes', AdminPanelController::class, 'students');
$router->post('/admin/estudiantes', StudentUserController::class, 'create');
$router->post('/admin/estudiantes/eliminar/$id', StudentUserController::class, 'delete');
$router->post('/admin/estudiantes/actualizar/$id', StudentUserController::class, 'update');

$router->get('/admin/asignaturas', AdminPanelController::class, 'subjects');
$router->post('/admin/asignaturas', SubjectController::class, 'create');
$router->post('/admin/asignaturas/eliminar/$id', SubjectController::class, 'delete');
$router->post('/admin/asignaturas/actualizar/$id', SubjectController::class, 'update');

$router->get('/admin/horarios', AdminPanelController::class, 'schedules');
$router->post('/admin/horarios', ScheduleController::class, 'create');
$router->post('/admin/horarios/eliminar/$id', ScheduleController::class, 'delete');
$router->post('/admin/horarios/actualizar/$id', ScheduleController::class, 'update');

$router->run();