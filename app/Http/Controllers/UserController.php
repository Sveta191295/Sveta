<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        echo "This is User with ID $id";
    }

    public function __construct()
    {
        $this->middleware('second:1');
    }
}
