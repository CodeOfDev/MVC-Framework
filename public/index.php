<?php

/**
 * MVC Framework
 *
 * @author Piotr Szewczyk
 */

require_once __DIR__.'/../vendor/autoload.php';

use App\Controllers\SiteController;

$app = new App\Core\App(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/login', [App\Controllers\AuthController::class, 'login']);
$app->router->post('/login', [App\Controllers\AuthController::class, 'login']);
$app->router->get('/register', [App\Controllers\AuthController::class, 'register']);
$app->router->post('/register', [App\Controllers\AuthController::class, 'register']);

$app->run();