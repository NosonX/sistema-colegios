<?php

use app\core\Router;
use app\controllers\PageController;
use app\controllers\AuthController;
use app\controllers\AdminDashboardController;
use app\controllers\AdminUserController;
use app\controllers\LevelController;
use app\controllers\TeacherUserController;
use app\controllers\StudentUserController;
use app\controllers\SubjectController;
use app\controllers\ScheduleController;
use app\controllers\StudentDashboardController;
use app\controllers\TeacherDashboardController;
use app\middlewares\AdminMiddleware;
use app\middlewares\StudentMiddleware;
use app\middlewares\TeacherMiddleware;

$router = new Router();

$router->get('/', PageController::class, 'home');
$router->post('/login', AuthController::class, 'login');
$router->get('/logout', AuthController::class, 'logout');

$router->get('/admin', AdminDashboardController::class, 'dashboard', AdminMiddleware::class);
$router->get('/alumno', StudentDashboardController::class, 'dashboard', StudentMiddleware::class);
$router->get('/profesor', TeacherDashboardController::class, 'dashboard', TeacherMiddleware::class);

$router->get('/admin/administradores', AdminDashboardController::class, 'admins', AdminMiddleware::class);
$router->post('/admin/administradores', AdminUserController::class, 'create', AdminMiddleware::class);
$router->post('/admin/administradores/eliminar/$id', AdminUserController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/administradores/actualizar/$id', AdminUserController::class, 'update', AdminMiddleware::class);

$router->get('/admin/niveles', AdminDashboardController::class, 'levels', AdminMiddleware::class);
$router->post('/admin/niveles', LevelController::class, 'create', AdminMiddleware::class);
$router->post('/admin/niveles/eliminar/$id', LevelController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/niveles/actualizar/$id', LevelController::class, 'update', AdminMiddleware::class);

$router->get('/admin/profesores', AdminDashboardController::class, 'teachers', AdminMiddleware::class);
$router->post('/admin/profesores', TeacherUserController::class, 'create', AdminMiddleware::class);
$router->post('/admin/profesores/eliminar/$id', TeacherUserController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/profesores/actualizar/$id', TeacherUserController::class, 'update', AdminMiddleware::class);

$router->get('/admin/estudiantes', AdminDashboardController::class, 'students', AdminMiddleware::class);
$router->post('/admin/estudiantes', StudentUserController::class, 'create', AdminMiddleware::class);
$router->post('/admin/estudiantes/eliminar/$id', StudentUserController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/estudiantes/actualizar/$id', StudentUserController::class, 'update', AdminMiddleware::class);

$router->get('/admin/asignaturas', AdminDashboardController::class, 'subjects', AdminMiddleware::class);
$router->post('/admin/asignaturas', SubjectController::class, 'create', AdminMiddleware::class);
$router->post('/admin/asignaturas/eliminar/$id', SubjectController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/asignaturas/actualizar/$id', SubjectController::class, 'update', AdminMiddleware::class);

$router->get('/admin/horarios', AdminDashboardController::class, 'schedules', AdminMiddleware::class);
$router->post('/admin/horarios', ScheduleController::class, 'create', AdminMiddleware::class);
$router->post('/admin/horarios/eliminar/$id', ScheduleController::class, 'delete', AdminMiddleware::class);
$router->post('/admin/horarios/actualizar/$id', ScheduleController::class, 'update', AdminMiddleware::class);

$router->run();