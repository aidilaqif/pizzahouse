<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){


        // get latest data only
        $pizzas = Pizza::latest()->get();
        
        return view('pizzas.index',[// pizzas.index referring to file index inside pizzas folder
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id){
    // use the $id variable to query the db for a record
    $pizza = Pizza::findOrFail($id); // if exist will show if not 404 not found
    return view('pizzas.show',['pizza' => $pizza]);// pizzas.show referring to file show inside pizzas folder
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));
        return redirect('/');
    }
}
