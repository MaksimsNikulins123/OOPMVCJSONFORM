<?php

require 'application/lib/Dev.php';

use application\lib\Db;


spl_autoload_register(function($class) 
{

    $path = str_replace('\\', '/', $class) . '.php';
        if(file_exists($path)){
            require $path;
        }
});


session_start();

$data;

$data = file_get_contents(("php://input"),true);
// $data = preg_replace('/\s+/', '',$data);

$jsonData=json_decode($data, true);

// var_dump($jsonData);
// print($jsonData);

$router = new application\core\Router;

$router->runRoute($jsonData);




