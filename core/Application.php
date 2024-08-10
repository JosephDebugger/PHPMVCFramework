<?php

/**
 * Class Application
 * 
 * @author Joseph Dias <josephdias012@gmail.com>
 * @package namespace app\core;
 */

namespace app\core;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public function __construct($rootPathName)
    {
        self::$ROOT_DIR = $rootPathName;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);  
    }
    
    public function run()
    {
        echo $this->router->resolve();   
    }
}