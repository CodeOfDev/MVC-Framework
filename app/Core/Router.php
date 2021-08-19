<?php

namespace App\Core;

/**
 * Class Router
 *
 * @author Piotr Szewczyk
 * @package App\Core
 */

class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false) {
            echo "Not found";
            exit;
        }
        if(is_string($callback)) {
            $this->renderView($callback);
            exit;
        }
        return call_user_func($callback);
    }

    public function renderView($view)
    {
        include_once App::$ROOT_DIR . "/views/$view.php";
    }
}