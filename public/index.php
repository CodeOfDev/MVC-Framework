<?php

/**
 * MVC Framework
 *
 * @author Piotr Szewczyk
 */

require_once __DIR__.'/../vendor/autoload.php';

use app\core\App;

$app = new App();

$app->router->get('/', function () {
    return 'Hello World!';
});
$app->router->get('/contact', function () {
    return 'Contact';
});

$app->run();