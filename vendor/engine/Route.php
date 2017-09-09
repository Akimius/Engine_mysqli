<?php

namespace Engine;

class Route
{
    public static function run()
    {
        $controller = 'Index';
        $action = 'index';
        $route = explode('/', $_SERVER['REQUEST_URI']);
        
        if(!empty($route[1])){
            $controller = ucfirst($route[1]);
        }
        
        if(!empty($route[2])){
            $action = $route[2];
        }
        
        $controller .= 'Controller';
        
        $controllersPath = APP . 'controllers/' . $controller . '.php';
        
        if(file_exists($controllersPath)){

            $controller = 'App\\controllers\\' . $controller;

            $controllerObj = new $controller;
            
            if(method_exists($controllerObj, $action)){
                $controllerObj->$action();
            }
            
        }else{
            echo "File not found!";
            exit();
        }
        
    }
}