<?php

namespace App\Core;

use App\Controllers\Controller;

/**
 * Class Applcation
 *
 * @author Piotr Szewczyk
 * @package App\Core
 */

class App
{
    /**
     * @var string
     */
    public static string $ROOT_DIR;

    /**
     * @var Router
     */
    public Router $router;

    /**
     * @var Request
     */
    public Request $request;

    /**
     * @var Response
     */
    public Response $response;

    /**
     * @var Controller
     */
    public Controller $controller;

    /**
     * @var App
     */
    public static App $app;

    /**
     * @param $rootPath
     */
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    /**
     *
     */
    public function run()
    {
        echo $this->router->resolve();
    }
}