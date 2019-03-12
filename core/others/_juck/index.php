<?php
///**
// * Created by PhpStorm.
// * User: jliang
// * Date: 1/30/2018
// * Time: 9:51 AM
// */
//phpinfo();

/*$name = $_GET['name'];
$greeting = " hello world, my name is " . $name;

echo $greeting;

$car = ['ford', 'gmc', 'buick'];

$car[] = 'honda';

unset($car[1]); //if you don't know the index of the item, using array_search($valueofitemwantremove, $array)

require 'functions.php';//call functions.php file

var_dump($car);//echo array will not displayed on screen


//dd($car);
foreach ($car as $item) {
    echo $item . '<br>';
}



$task = [
    'title' => 'Finish homework',
    'due' => 'Friday',
    'assignee' => 'Jason',
    'completed' => true
];

echo '<pre>';// pretext is good feature for format displayed text of html

echo $task['due'] . '- display a single item value from associated array<br>';
ucwords(var_dump($task));


//die(var_dump($task)); die function to stop the program

$task['department'] = 'HR'; //push a new item to array

unset($task['due']); // use to remove the item from array


foreach ($task as $prefix => $specific) {
    echo ucwords($prefix) . ': ' . $specific . '<br>';// ucwords () function upcase words
}
echo '</pre>';

//die(); //exit function of php to stop interpreting and exit the execute





class Taskclass{
    protected $description;
    protected $completed = false;

    public function __construct($description)//constructor is automatically triggered on instantiation
    {
        $this->description = $description;
    }

    public function isComplete(){
        return $this->completed;
    }

    public function completetast(){
        $this->completed = true;
    }


    public function description(){
        return $this->description;
    }


}


$newtask = new Taskclass("go to school");

var_dump($newtask);
echo "<br>";
$newtask->completetast();

var_dump(($newtask->isComplete()));
echo "<br>";
$taskcelection = [
    new Taskclass("GO HOME"),
    new Taskclass("go work"),
    new Taskclass("sleeping")
];

var_dump($taskcelection);

//$newtask->description;//can't access a protected property directly.
echo "<br><br>";
var_dump($newtask->description());//

//echo $newtask; cannot echo an object but can echo a property of object
echo $newtask->description();

echo $newtask->isComplete();

$taskcelection[0]->completetast();

echo "<br><br>";*/

//require 'functions.php'; //call the functions

//$query= require '\core\bootstrap.php'; //see here we can get return value from a php file instead of function
//require 'SIMcard.php'; // call the class
//$pdo = connectToDb();
//$SIMcards = fetchAllSIMcards($pdo);



//$SIMcards = $query->selectAll('SIMList');

//$SIMcards = $app['database']->selectAll('SIMList');

$SIMcards = App::get('database')->selectAll('SIMList');
//$SIMcards_map = array_map(function($SIMcardi){
//    $s= new SIMcard();
//    $s->ICCID = $SIMcardi['ICCID'];
//      $s->ICCID = $SIMcardi->ICCID;

//},$SIMcards);

//echo '<pre>';


//var_dump($results);
//var_dump($results[0]);
//var_dump($results[0]->Comments);


//var_dump($SIMcards[2]);

//echo "<br><br>";
//
////var_dump($SIMcards_map);
//var_dump($SIMcards);
////var_dump($SIMcards[0]->foobar());
//
//
//echo '</pre>';

//$users = $app['database']->selectAll('users');
$users = App::get('database')->selectAll('users');


require 'views/index.view.php';