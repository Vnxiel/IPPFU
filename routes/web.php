<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('index');
});

Route::get('/main/index', function () {
    $username = request('username');
    $password = request('password');
    
    // Handle the form data, e.g., authenticate user
    return view('main.index', compact('username', 'password')); // Just an example
})->name('main.index');

Route::controller(MainController::class)->group(function () {
    Route::get('/main/projectManagement', 'projects')->name('main.projects');
    Route::get('/main/reports', 'funds')->name('main.funds');
    Route::get('/main/userRoles', 'userRoles')->name('main.userRoles');
    Route::get('/main/activityLogs', 'activityLogs')->name('main.activityLogs');
});
