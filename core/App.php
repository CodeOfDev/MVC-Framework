<?php

namespace app\core;

/**
 * Class Applcation
 *
 * @author Piotr Szewczyk
 * @package App\Core
 */

class App
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}