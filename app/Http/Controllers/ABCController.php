<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ABCController extends Controller
{
    public function index() {
        echo "<br>ABC Controller.";

        echo url("/users/1");
        echo "Current: ". url()->current() . "<br>";
        echo "Full:" . url()->full() . "<br>";
        echo "Previous:" .url()->previous() . "<br>";


        // $previous = url()->previous();
        // return view(('adezrgfr',[previousUrl= ]))







        }
}
