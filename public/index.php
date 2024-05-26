<?php

/* PHP MVC FRAMEWORK */

require_once __DIR__.'/../vendor/autoload.php';


var_dump(dirname(__DIR__));

use app\core\Application;


$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');
    
$app->run();