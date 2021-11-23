<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function show($id)
    // {
    //     echo "This is User with ID $id";
    // }

    public function __construct()
    {
        $this->middleware('second:1');
    }


    public function show(Request $request,$x)
    {
// $params = $request->only(["param1"]);
    echo $request->path() . "<br>";

    echo $request->fullUrl() . "<br>";

    echo $request->method();
    var_dump($request->isMethod('post'));
    $param1 = $request->input('param1');
    $param2 = $request->input('param2');
    $param3 = $request->input('param13',3);
    var_dump($param1,$param2,$param3);
    }
}
