<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route for /pizzas
Route::get('/pizzas', [PizzaController::class,'index']);
Route::get('/pizzas/{id}', [PizzaController::class,'show']);//controllerName@function