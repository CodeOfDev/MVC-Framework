<?php

namespace App\Controllers;

use App\Core\App;

class Controller
{
    public string $layout = 'main';

    public function render($view, $params = [])
    {
        return App::$app->router->renderView($view, $params);
    }

    public function setLayout(string $layout)
    {
        $this->layout = $layout;
    }
}