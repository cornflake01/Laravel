<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// hello
Route::get('/', function () {
    return 'Hello, Laravel!';
});

// second route
Route::get('/greet', [GreetController::class, 'showGreeting']);
Route::resource('tasks', TaskController::class);

// app
Route::get('/app', function () {
    return view('app');
});
