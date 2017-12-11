<?php

namespace App\Controllers;

use App\Core\App;

/**
 * make a resourse controller for UserController
 */
class UserController
{

    public function __construct()
    {
        # code...
    }
    public function index()
    {
        $users = App::get('database')->selectAll('users', null);
        return view('Users', compact('users'));
    }
    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);

        return redirect('/users');
    }
}
