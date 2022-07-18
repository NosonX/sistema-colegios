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
use app\controllers\StudentPanelController;
use app\controllers\TeacherPanelController;
use app\middlewares\AdminMiddleware;
use app\middlewares\StudentMiddleware;
use app\middlewares\TeacherMiddleware;

$router = new Router();

$router->get('/', PageController::class, 'home');
$router->post('/login', AuthController::class, 'login');
$router->get('/logout', AuthController::class, 'logout');

$router->get('/admin', AdminPanelController::class, 'dashboard', AdminMiddleware::class);
$router->get('/estudiante', StudentPanelController::class, 'dashboard', StudentMiddleware::class);
$router->get('/profesor', TeacherPanelController::class, 'dashboard', TeacherMiddleware::class);

$router->get('/admin/administradores', AdminPanelController::class, 'admins', AdminMiddleware::class);
$router->post('/admin/administradores', AdminUserController::class, 'create', AdminMiddleware::class);
$router->post('/admin/administradores/eliminar/$id', AdminUserController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/administradores/actualizar/$id', AdminUserController::class, 'update', AdminMiddleware::class);

$router->get('/admin/niveles', AdminPanelController::class, 'levels', AdminMiddleware::class);
$router->post('/admin/niveles', LevelController::class, 'create', AdminMiddleware::class);
$router->post('/admin/niveles/eliminar/$id', LevelController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/niveles/actualizar/$id', LevelController::class, 'update', AdminMiddleware::class);

$router->get('/admin/profesores', AdminPanelController::class, 'teachers', AdminMiddleware::class);
$router->post('/admin/profesores', TeacherUserController::class, 'create', AdminMiddleware::class);
$router->post('/admin/profesores/eliminar/$id', TeacherUserController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/profesores/actualizar/$id', TeacherUserController::class, 'update', AdminMiddleware::class);

$router->get('/admin/estudiantes', AdminPanelController::class, 'students', AdminMiddleware::class);
$router->post('/admin/estudiantes', StudentUserController::class, 'create', AdminMiddleware::class);
$router->post('/admin/estudiantes/eliminar/$id', StudentUserController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/estudiantes/actualizar/$id', StudentUserController::class, 'update', AdminMiddleware::class);

$router->get('/admin/asignaturas', AdminPanelController::class, 'subjects', AdminMiddleware::class);
$router->post('/admin/asignaturas', SubjectController::class, 'create', AdminMiddleware::class);
$router->post('/admin/asignaturas/eliminar/$id', SubjectController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/asignaturas/actualizar/$id', SubjectController::class, 'update', AdminMiddleware::class);

$router->get('/admin/horarios', AdminPanelController::class, 'schedules', AdminMiddleware::class);
$router->post('/admin/horarios', ScheduleController::class, 'create', AdminMiddleware::class);
$router->post('/admin/horarios/eliminar/$id', ScheduleController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/horarios/actualizar/$id', ScheduleController::class, 'update', AdminMiddleware::class);

$router->run();