<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ABCController extends Controller
{
    public function index() {
        // echo "<br>ABC Controller.";

        // echo url("/users/1");
        // echo "Current: ". url()->current() . "<br>";
        // echo "Full:" . url()->full() . "<br>";
        // echo "Previous:" .url()->previous() . "<br>";


        // $previous = url()->previous();
        // return view(('adezrgfr',[previousUrl= ]))


        // $users = DB::select('select * from users where id<?', [10]);
        // return view('user.index', ['users' => $users]);
        

        // $affected = DB::update(
        //     "update users set role = 'admin' where username = ?",
        //     ['John']
        //     );
        //  echo  $affected;
            
        // DB::transaction(function () {
        //     DB::table('users')
        //     ->update(['votes' => 1]);
        //     DB::table('posts')->delete();
        //     });
        
        // $users = DB::table('users')->get();
        // return view('user.index', ['users' => $users]);

        // $user = DB::table('users')->where('username', 'admin')->first();
        // // echo $user->username;
        // echo "<pre>";print_r($user);exit;

        // return view("user.index",["users"=>$users]);

        //$users = DB::select('select username from usersorder by username');


        // $user = DB::table('users')->find(1);

        // return view("user.index",["users"=>$user]);



        // $id = DB::table('countries')
        // ->max('id');
        // echo "<pre>";print_r($id);exit;

        // $id = DB::table('countries')
        // ->select('name', 'code as code1')->get();
        // // ->where('region_name', 'Africa')
        // // ->avg('id');
        // echo "<pre>";print_r($id);exit;


        // $id = DB::select("select name from countries order by id desc limit 1")
        $id = DB::table('countries')->orderBy('id','desc')->value('name');
        
        echo "<pre>";print_r($id);exit;
        


        




}

        }
