<?php

namespace application\core;

use application\core\View;

class Router
{
    protected $routes = [];
    protected $params = [];
    protected $data;

    public function __construct()
    {
        $arr = require 'application/config/routes.php';
        
        foreach($arr as $key => $value){
            
            $this->addRoute($key, $value);
            
        }
       
    }

    public function addRoute($route, $params)
    {
       
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
       
    }

    public function matchRoute()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        
        foreach($this->routes as $route => $params) {
            if(preg_match($route, $url, $matches)){
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function runRoute($data)
    {
        $this->data = $data;
        $type = gettype($this->data);
        // var_dump($array);
       if($this->matchRoute()){
       
            $path = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller' ;

            
         
            if(class_exists($path) && !is_array($this->data)){

                // echo 'Class ' . $path . ' exist';
                // echo '<br>';
                $action = $this->params['action'][0].'Action';
                if(method_exists($path, $action)){
                    $controller =  new $path($this->params, $this->data);
                    $controller->$action();
                }else{
                    echo 'Cannot find action: ' . $action;
                    // echo '<br>';
                    View::errorCode(404);
                }
            }else if(class_exists($path) && is_array($this->data)){
                $action = $this->params['action'][1].'Action';
                
                if(method_exists($path, $action)){
                    $controller =  new $path($this->params, $this->data);
                    $controller->$action($this->data);
                }else{
                    echo 'Cannot find action: ' . $action;
                    // echo '<br>';
                    View::errorCode(404);
                }
            }else{
                echo 'Cannot find controller:' .$path; 
                // echo '<br>';
                View::errorCode(404);
            }

       }else{
        echo 'Route not found';
        // echo '<br>';
        View::errorCode(404);
       }
    }
}