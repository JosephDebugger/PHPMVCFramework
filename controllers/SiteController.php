<?php
/** User: Joseph Dias */

namespace app\controllers;

use app\core\Application;

/**
 * class SiteController
 * 
 * @author Joseph Dias <josephdias012@gmail.com>
 * @package app\controllers
 */

 class SiteController
 {
    public function home(){
        $params = [
            'name' => "Joseph Dias"
        ];
        return Application::$app->router->randerView('home', $params);
    }
    public function contact(){
        return Application::$app->router->randerView('contact');
    }
    public function handleContact(){
        return 'submitted';
    }
 }