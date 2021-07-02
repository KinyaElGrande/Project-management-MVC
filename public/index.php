<?php

use app\controllers\ProjectController;
use app\controllers\SiteController;
use app\src\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);

//Project routes
$app->router->get('/project-create', [ProjectController::class, 'projectCreate']);
$app->router->post('/project-create', [ProjectController::class, 'projectCreate']);

$app->run();