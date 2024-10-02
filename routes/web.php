<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route is by order
// route for /pizzas
Route::get('/pizzas', [PizzaController::class,'index']);
Route::get('/pizzas/create',[PizzaController::class,'create']);
Route::post('/pizzas',[PizzaController::class, 'store']);
Route::get('/pizzas/{id}', [PizzaController::class,'show']);//controllerName@function
