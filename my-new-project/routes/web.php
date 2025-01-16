<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// First route: returns 'Hello, Laravel!'
Route::get('/', function () {
    return 'Hello, Laravel!';
});

// Second route: calls GreetController and returns the Blade view
Route::get('/greet', [GreetController::class, 'showGreeting']);
