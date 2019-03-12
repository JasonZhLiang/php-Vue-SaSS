<?php


/*$router->define([

    ''=>'controllers/index.php',
    'about'=>'controllers/about.php',
    'about/culture'=>'controllers/about-culture.php',
    'contact'=>'controllers/contact.php',
    'names' => 'controllers/add-name.php'

]);*/

//$router->get('','controllers/index.php');
//$router->get('about','controllers/about.php');
//$router->get('about/culture','controllers/about-culture.php');
//$router->get('contact','controllers/contact.php');
//$router->post('names','controllers/add-name.php');

$router->get('','PageController@home');
$router->get('about','PageController@about');
$router->get('about/culture','PageController@about_culture');
$router->get('contact','PageController@contact');
$router->post('names','PageController@add_name');


$router->get('users','UsersController@index');
$router->post('users','UsersController@store');
