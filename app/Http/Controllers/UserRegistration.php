<?php

namespace App\Http\Controllers;





use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserRegistration extends Controller
{
  
    // public function postRegister(Request $request) {
    //     if($request->isMethod("post")){
    //          //Retrieve the name input field
    //     $name = $request->input('name');
    //     echo 'Name: '.$name;
    //     echo '<br>';
    //     //Retrieve the username input field
    //     $username = $request->username;
    //     echo 'Username: '.$username;
    //     echo '<br>';
    //     //Retrieve the password input field
    //     $password = $request->password;
    //     echo 'Password: '.$password;
    // }
    //     }

    
    // public function postRegister(Request $request) {
    //     if($request->isMethod("post")){
    //         $params= $request->only(['name','username','password']);
    //         $name = $request->input('name');
    //         setcookie('name',$name);
    //         $username = $request->username;
    //         setcookie('username',$username);        
    //         $password = $request->password;        
    //         setcookie('password',$password);        
    //         return response()->json($params);
    // }
    //     }



        public function postRegister(Request $request) {
            if($request->isMethod("post")){
                $params= $request->only(['name','username','password']);
                $name = $request->input('name');
                // setcookie('name',$name);
                $username = $request->username;
                // setcookie('username',$username);        
                $password = $request->password;        
                // setcookie('password',$password);        
                return response()->json($params)
                ->cookie('name',$name,1)
                ->cookie('username',$username,1)
                ->cookie('password',$password,1);
        }
            }
       
}



