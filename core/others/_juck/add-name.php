<?php
/*var_dump($_REQUEST);//any items request whether GET or POST
var_dump($_SERVER);
$router = Router::load('routes.php');
var_dump($router->routes);
var_dump($app['database']);*/


App::get('database')->insert('users',[
    'name' =>$_POST['name']
]);

header('Location: /');