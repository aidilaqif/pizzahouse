<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        // get all data from db, then pass into array
        // $pizzas = Pizza::all();

        // get all data from db but order them by name, then pass into array
        // $pizzas =Pizza::orderBy('name')->get();

        // get match data from db, then pass into array
        // $pizzas = Pizza::where('type','hawaiian')->get();

        // get latest data only
        $pizzas = Pizza::latest()->get();

        return view('pizzas',[
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id){
    // use the $id variable to query the db for a record

    return view('details',['id' => $id]);
    }
}
