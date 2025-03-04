<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('main.index');  // Returns the 'dashboard.blade.php' view
    }

    public function projects(){
        return view('main.projects');  // Returns the 'projects.blade.php' view
    }

    public function funds(){
        return view('main.funds');  // Returns the 'funds.blade.php' view
    }

    public function userRoles(){
        return view('main.userRoles');  // Returns the 'userRoles.blade.php' view
    }

    public function activityLogs(){
        return view('main.activityLogs');  // Returns the 'activityLogs.blade.php' view
    }
}
