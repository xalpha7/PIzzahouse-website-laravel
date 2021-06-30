<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza; // import Pizzas.php from model.

class PizzaController extends Controller
{

    // public function __construct() { // to apply protected routes to all the method below.
    //     $this->middleware('auth');
        
    // }

    public function index() {  // This is for the `/pizzas`. here index() is a naming convention only used for the '/pizzas
        
        $pizzas = Pizza::all();  // this will look at the pizzas table and retrive all records.

        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id) {
    // when a user type something in the browser then the route assign it to the `$id` variable.
    // use the $id variable to query the db for a record.

    $pizza = Pizza::findorFail($id); // it will look for a id in the database and if it is not exist then it will show a 404 page.
    return view('pizzas.show', [
        'pizza' => $pizza
    ]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {

        $pizza = new Pizza(); // creating a new pizza model instance.

         // requesting details filled by the user.
        $pizza->name = request('name'); 
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        
        $pizza->save();  // saving data in the database
 
        return redirect('/')->with('mssg','---  Thank you for ordering  ---');
    }

    public function destroy($id) {
        $pizza = Pizza::findorFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
