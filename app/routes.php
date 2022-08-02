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
use app\utils\Constants;
use app\core\HttpMethod;

$router = new Router();

$router->get('/', PageController::class, 'home');
$router->post('/login', AuthController::class, 'login');
$router->get('/logout', AuthController::class, 'logout');

// Admin Routes
$router->group(
    '/'.Constants::$ADMIN_ROLE,
    [
        ['get', '', AdminDashboardController::class, 'dashboard'],

        // Administradores
        ['get', '/administradores', AdminDashboardController::class, 'admins'],
        ['post', '/administradores', AdminUserController::class, 'create'],
        ['post', '/administradores/eliminar/$id', AdminUserController::class, 'delete'],
        ['post', '/administradores/actualizar/$id', AdminUserController::class, 'update'],

        // Profesores
        ['get', '/profesores', AdminDashboardController::class, 'teachers'],
        ['post', '/profesores', TeacherUserController::class, 'create'],
        ['post', '/profesores/eliminar/$id', TeacherUserController::class, 'delete'],
        ['post', '/profesores/actualizar/$id', TeacherUserController::class, 'update'],

        // Estudiantes
        ['get', '/estudiantes', AdminDashboardController::class, 'students'],
        ['post', '/estudiantes', StudentUserController::class, 'create'],
        ['post', '/estudiantes/eliminar/$id', StudentUserController::class, 'delete'],
        ['post', '/estudiantes/actualizar/$id', StudentUserController::class, 'update'],

        // Niveles
        ['get', '/niveles', AdminDashboardController::class, 'levels'],
        ['post', '/niveles', LevelController::class, 'create'],
        ['post', '/niveles/eliminar/$id', LevelController::class, 'delete'],
        ['post', '/niveles/actualizar/$id', LevelController::class, 'update'],

        // Asignaturas
        ['get', '/asignaturas', AdminDashboardController::class, 'subjects'],
        ['post', '/asignaturas', SubjectController::class, 'create'],
        ['post', '/asignaturas/eliminar/$id', SubjectController::class, 'delete'],
        ['post', '/asignaturas/actualizar/$id', SubjectController::class, 'update'],

        // Horarios
        ['get', '/horarios', AdminDashboardController::class, 'schedules'],
        ['post', '/horarios', ScheduleController::class, 'create'],
        ['post', '/horarios/eliminar/$id', ScheduleController::class, 'delete'],
        ['post', '/horarios/actualizar/$id', ScheduleController::class, 'update'],
    ],
    AdminMiddleware::class
);

// Teacher Routes
$router->group(
    '/'.Constants::$TEACHER_ROLE,
    [
        ['get', '', TeacherDashboardController::class, 'dashboard'],

        // Profesores
        ['get', '/profesores', TeacherDashboardController::class, 'teachers'],

        // Estudiantes
        ['get', '/estudiantes', TeacherDashboardController::class, 'students'],

        // Notas
        ['get', '/estudiantes', TeacherDashboardController::class, 'notes'],

        // Asistencia
        ['get', '/asistencia', TeacherDashboardController::class, 'attendance'],
    ],
    TeacherMiddleware::class
);

// Student Routes
$router->group(
    '/'.Constants::$STUDENT_ROLE,
    [
        ['get', '', StudentDashboardController::class, 'dashboard'],
    ],
    TeacherMiddleware::class
);

$router->run();