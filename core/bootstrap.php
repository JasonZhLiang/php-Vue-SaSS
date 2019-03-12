<?php
/**
 * Created by PhpStorm.
 * User: jliang
 * Date: 2/21/2018
 * Time: 4:01 PM
 */


use App\Core\App;

/*
$app=[];


//$config = require 'config.php';

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

//return new QueryBuilder(Connection::make($config['database']));

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

*/

//after using composer install at command line, it automatic load all the class under the folder which define in composer.json file
App::bind('config',require 'config.php');

App::bind('your name','jason liang');//you can bind anything to container and give the item a label

//die(var_dump(App::get('your name')));
//die(var_dump(App::get('config')));

App::bind('database',new QueryBuilder(Connection::make(App::get('config')['database'])));


function view($name,$data=[]){//set second argument default is an empty array.
    extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path){
    header("Location: /{$path}");
}