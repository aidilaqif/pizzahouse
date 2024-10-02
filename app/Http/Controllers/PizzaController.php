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

    return view('pizzas.show',['id' => $id]);// pizzas.show referring to file show inside pizzas folder
    }

    public function create(){
        return view('pizzas.create');
    }
}
