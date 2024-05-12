<?php

namespace app\core;

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
        if ($callback === false) {
            return "Not Found";
        }
        if (is_string($callback)) {
            return $this->randerView($callback);
        }
        return call_user_func($callback);
    }
    public function randerView($view){
        $layoutContent = $this->layoutContent();
        include_once __DIR__.'/../views/'.$view.'.php';
    }
    protected function layoutContent(){
        include_once
    }
}