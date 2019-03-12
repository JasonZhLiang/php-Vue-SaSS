<?php
/**
 * Created by PhpStorm.
 * User: jliang
 * Date: 4/2/2018
 * Time: 4:01 PM
 */

namespace App\Controllers;
use App\Core\App;
class PageController
{
    public function home()
    {
        $users = App::get('database')->selectAll('users');
//        require 'views/index.view.php';
        //return view('index',['users'=>$users]);//after using view function, the view does not the $users variable
        return view('index',compact('users')); //this is an alternate equivalent way of above line, passing an array to function
    }

    public function about()
    {
//        require 'views/about.view.php';
        $company = "ERP";
        return view('about',['company'=>$company] );
    }

    public function contact()
    {
//        require 'views/contact.view.php';
        return view('contact');
    }

    public function about_culture()
    {
        $name = "Laracasts";

//        require 'views/about-culture.view.php';
        return view('about-culture');
    }

//    public function add_name()
//    {
//        App::get('database')->insert('users',[
//            'name' =>$_POST['name']
//        ]);
//        header('Location: /');
//    }
}