<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route is by order
// route for /pizzas
Route::get('/pizzas', [PizzaController::class,'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create',[PizzaController::class,'create'])->name('pizzas.create');
Route::post('/pizzas',[PizzaController::class, 'store'])->name('pizzas.store');
Route::get('/pizzas/{id}', [PizzaController::class,'show'])->name('pizzas.show')->middleware('auth');//controllerName@function
Route::delete('/pizzas/{id}',[PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

Auth::routes([
    'register' => false // won't create register route, prevent other from register
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
