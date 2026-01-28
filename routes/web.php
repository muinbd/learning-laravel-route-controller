<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/me', [DemoController::class, 'me']);
// Route::get('/greet', [DemoController::class, 'generalGreet']);
Route::get('/greet/{name?}/{title?}', [DemoController::class, 'greet']);
