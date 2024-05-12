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
    public function __construct($rootPathName)
    {
        self::$ROOT_DIR = $rootPathName;
        $this->request = new Request();
        $this->router = new Router($this->request);  
    }
    
    public function run(){
        echo $this->router->resolve();   
    }
}