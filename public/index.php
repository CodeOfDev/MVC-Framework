<?php

/**
 * MVC Framework
 *
 * @author Piotr Szewczyk
 */

require_once __DIR__.'/../vendor/autoload.php';

$app = new App\Core\App(dirname(__DIR__));

$app->router->get('/', function () {
    return 'Hello World!';
});
$app->router->get('/contact', 'contact');

$app->run();