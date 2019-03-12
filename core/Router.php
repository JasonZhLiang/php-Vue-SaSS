<?php

namespace App\Core;

class Router{


    public $routes = [
        'GET'=>[],
        'POST'=>[]
    ];

    public static function load($file)
    {
        $router = new static;//we want a new instance of Router here. or $router = new self; or  $router = new Router;
//        $router = new self;
        require $file;

        return $router;//the name $router must match the the name of viarable in $file which is $router as well.
    }

/*    public function define($routes){

        $this->routes = $routes;

    }*/

    public function get ($uri,$controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post ($uri,$controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri,$requstType)
    {
        //die(var_dump($uri, $requstType));
        if(array_key_exists($uri,$this->routes[$requstType])){
            //return $this->routes[$requstType][$uri];

            //explode('@',$this->routes[$requstType][$uri]);
            
            //...is a split operator feature, when passing an array to the function, each item inside the array will be convert separately to function arguments
            return $this->callAction(...explode('@',$this->routes[$requstType][$uri]));
        }
        throw new Exception('No route defined for this URI');
    }

    protected function callAction($controller, $action){
        //die(var_dump($controller, $action));
        $controller ="App\\Controllers\\{$controller}";
        $controller = new $controller;
        if (!method_exists($controller, $action)){
            throw new Exception("{$controller} does not respond to the {$action} action");
        }
        return $controller->$action();
    }

}