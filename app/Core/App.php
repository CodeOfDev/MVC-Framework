<?php

namespace App\Core;

/**
 * Class Applcation
 *
 * @author Piotr Szewczyk
 * @package App\Core
 */

class App
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}