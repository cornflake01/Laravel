<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// home route
Route::get('/', function () {
    return view('home'); // Use the Blade view here
});

// second route
Route::get('/greet', [GreetController::class, 'showGreeting']);
Route::resource('tasks', TaskController::class);

// app route
Route::get('/app', function () {
    return view('app');
});
