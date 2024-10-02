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

    return view('pizzas',[
        'pizzas' => $pizzas,
    ]);
    
});

Route::get('/pizzas/{id}', function($id){
    // use the $id variable to query the db for a record

    return view('details',['id' => $id]);
    
});