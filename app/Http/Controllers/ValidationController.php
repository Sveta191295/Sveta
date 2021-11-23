<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValidationController extends Controller
{
    public function showform() {
        return view('login');
    }
    public function validateform(Request $request) {
        print_r($request->all());
        $this->validate($request,[ 
            'username'=>'required|max:8',        
            'password'=>'required|min:6'        
        ],
    [
        'username.required'=>'username-y partadir e',
        'username.max'=>'username max 8 nish',
        'password.required'=>'username-y partadir e',
        'password.min'=>'password min 6 nish',
    ]);        
    }
        
}
