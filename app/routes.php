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
use app\middlewares\AuthMiddleware;

$router = new Router();

$router->get('/', PageController::class, 'home');
$router->post('/login', AuthController::class, 'login');
$router->get('/logout', AuthController::class, 'logout');

$router->get('/admin', AdminPanelController::class, 'dashboard', AuthMiddleware::class);

$router->get('/admin/administradores', AdminPanelController::class, 'admins', AuthMiddleware::class);
$router->post('/admin/administradores', AdminUserController::class, 'create', AuthMiddleware::class);
$router->post('/admin/administradores/eliminar/$id', AdminUserController::class, 'delete', AuthMiddleware::class);
$router->post('/admin/administradores/actualizar/$id', AdminUserController::class, 'update', AuthMiddleware::class);

$router->get('/admin/niveles', AdminPanelController::class, 'levels', AuthMiddleware::class);
$router->post('/admin/niveles', LevelController::class, 'create', AuthMiddleware::class);
$router->post('/admin/niveles/eliminar/$id', LevelController::class, 'delete', AuthMiddleware::class);
$router->post('/admin/niveles/actualizar/$id', LevelController::class, 'update', AuthMiddleware::class);

$router->get('/admin/profesores', AdminPanelController::class, 'teachers', AuthMiddleware::class);
$router->post('/admin/profesores', TeacherUserController::class, 'create', AuthMiddleware::class);
$router->post('/admin/profesores/eliminar/$id', TeacherUserController::class, 'delete', AuthMiddleware::class);
$router->post('/admin/profesores/actualizar/$id', TeacherUserController::class, 'update', AuthMiddleware::class);

$router->get('/admin/estudiantes', AdminPanelController::class, 'students', AuthMiddleware::class);
$router->post('/admin/estudiantes', StudentUserController::class, 'create', AuthMiddleware::class);
$router->post('/admin/estudiantes/eliminar/$id', StudentUserController::class, 'delete', AuthMiddleware::class);
$router->post('/admin/estudiantes/actualizar/$id', StudentUserController::class, 'update', AuthMiddleware::class);

$router->get('/admin/asignaturas', AdminPanelController::class, 'subjects', AuthMiddleware::class);
$router->post('/admin/asignaturas', SubjectController::class, 'create', AuthMiddleware::class);
$router->post('/admin/asignaturas/eliminar/$id', SubjectController::class, 'delete', AuthMiddleware::class);
$router->post('/admin/asignaturas/actualizar/$id', SubjectController::class, 'update', AuthMiddleware::class);

$router->get('/admin/horarios', AdminPanelController::class, 'schedules', AuthMiddleware::class);
$router->post('/admin/horarios', ScheduleController::class, 'create', AuthMiddleware::class);
$router->post('/admin/horarios/eliminar/$id', ScheduleController::class, 'delete', AuthMiddleware::class);
$router->post('/admin/horarios/actualizar/$id', ScheduleController::class, 'update', AuthMiddleware::class);

$router->run();