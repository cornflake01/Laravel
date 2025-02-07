<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// First route: returns 'Hello, Laravel!'
Route::get('/', function () {
    return 'Hello, Laravel!';
});

// Second route: calls GreetController and returns the Blade view
Route::get('/greet', [GreetController::class, 'showGreeting']);
Route::resource('tasks', TaskController::class);