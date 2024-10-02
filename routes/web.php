<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route for /pizzas
Route::get('/pizzas', function(){
    // get data from db, then pass into array
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy'],
    ];

    $name = request('name');
    

    return view('pizzas',[
        'pizzas' => $pizzas,
        'name' => $name,
        'age' => request('age')//other ways to store the variable
    ]);
    
});