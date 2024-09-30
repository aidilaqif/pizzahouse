<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function(){
    // get data from db, then pass into array
    $pizza = [
        'type' => 'hawaiian',
        'base' => 'cheesy crust',
        'price' => 10
    ];
    return view('pizzas',$pizza);
    
});