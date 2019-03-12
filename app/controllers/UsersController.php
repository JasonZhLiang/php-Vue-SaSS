<?php
/**
 * Created by PhpStorm.
 * User: jliang
 * Date: 4/3/2018
 * Time: 10:27 AM
 */

namespace App\Controllers;
use App\Core\App;
class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', ['users'=>$users]);
    }

    public function store()
    {
        App::get('database')->insert('users',[
            'name' =>$_POST['name']
        ]);

        return redirect('users');
        //header('Location: /users');
    }
}