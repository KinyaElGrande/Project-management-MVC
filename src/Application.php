<?php

namespace app\src;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;

    /**
     * Application constructor.
     */
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