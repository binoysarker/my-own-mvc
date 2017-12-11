<?php

namespace App\Controllers;

use App\Core\App;

/**
 * PagesController to controll the request delegating in some form and then returning some response
 */

class PagesController
{

    public function __construct()
    {
        # code...
    }
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos', '\App\Models\Task');
        $users = App::get('database')->selectAll('users', null);
        // dd($names);
        return view('index', compact('tasks', 'users'));
    }
    public function about()
    {
        return view('About-us');
    }
    public function contact()
    {
        return view('Contact-us');
    }

}
