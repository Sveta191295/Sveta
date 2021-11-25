<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValidationController extends Controller
{
    public function showform() {
        return view('registration');
    }
    public function validateform(Request $request) {
        print_r($request->all());
        $this->validate($request,[ 
            'name'=>'required|alpha',
            'email' => 'required|email:rfc,dns',
            'address' => 'nullable|alpha_num',  
            'password'=>'required|min:8'        
        ]);        
    }
        
}
