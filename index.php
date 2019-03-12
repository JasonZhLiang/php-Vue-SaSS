<?php
//$query= require 'core/bootstrap.php';

use App\Core\Router; //use the namespace, import the class
use App\Core\Request;
//use App\Core\{Router, Request}; //for php 7.0

require 'vendor/autoload.php';

require 'core/bootstrap.php';

//$uri= trim($_SERVER['REQUEST_URI'],'/');

/*$router = new Router;

require 'routes.php';//this will call the Router define method

require $router->direct($uri);*/

//require Router::load('routes.php')->direct(Request::uri(),Request::method());

//because we no longer require file, we use controller right now.
Router::load('app/routes.php')->direct(Request::uri(),Request::method());

//
//$router =Router::load('routes.php');
//
//require $router->direct($uri);
