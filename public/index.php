<?php

use app\controllers\ProjectController;
use app\controllers\SiteController;
use app\src\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);

//Project routes
$app->router->get('/project-create', [ProjectController::class, 'projectCreate']);
$app->router->post('/project-create', [ProjectController::class, 'projectCreate']);

$app->run();