<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //function to authenticate that will apply to all function
    // public function __construct(){
    //     $this->middleware('auth');
    // }
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

    //function to create item
    public function create(){
        return view('pizzas.create');
    }

    // function to add item to db
    public function store(){
        
        $pizza = new Pizza();// create instance of pizza model

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
    

        // error_log($pizza);

        $pizza->save();

        return redirect('/')->with('mssg','Thanks for your order');
    }
    
    // function to delete record
    public function destroy($id){
        $pizza = Pizza::findOrFail($id);//find based on ID
        $pizza->delete();

        return redirect('/pizzas');
    }
}
