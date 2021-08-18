<?php

namespace app\core;

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

    public function __construct(\App\Core\Request $request)
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
        }
        echo call_user_func($callback);
    }
}