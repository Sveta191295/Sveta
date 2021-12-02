<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Flight;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;



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
        // $id = DB::table('countries')->orderBy('id','desc')->value('name');
        
        // echo "<pre>";print_r($id);exit;
        


        // $users = DB::table('users')
        // ->join('companies','users.company_id', '=', 'companies.id')
        // ->select(['name', 'title as company_title'])
        // ->get();
        // echo "<pre>";print_r($users);exit;


        // $country = DB::table('countries')
        // ->where('region_name', '=', 'Africa')
        // ->first();

        // $country = DB::table('countries')
        // ->where('region_name', '!=', 'Europe')
        // ->get();

        // $country = DB::table('countries')
        // ->where('name', 'like', '%stan')
        // ->get();

        // $country = DB::table('countries')
        // ->where('region_name', 'Europe')
        // ->orWhere('region_name', 'Asia')
        // ->get();


        // $country = DB::table('countries')
        // ->whereIn('region_name', ['Europe', 'Asia'])
        // ->get();



        // $country = DB::table('countries')
        // ->whereNotIn('region_name', ['Europe', 'Asia'])
        // ->get();

        // echo "<pre>"; print_r($country); echo "</pre>";

        // $users = DB::table('users')
        // ->whereNull('created_at')->get();

        // $users = DB::table('users')
        // ->orderBy('name','desc')
        // ->get();



        // $users = DB::table('users')
        // ->offset(2)
        // ->limit(1)
        // ->get();



        // DB::table('companies')
        // ->insert(['title' => 'Facebook']);


        // DB::table('companies')
        // ->insert([
        //     ['title' => 'TikTok'],
        //     ['title' => 'Twitter'],
        //     ]);

    //     DB::table('users')
    //     ->where('id', 1)
    //     ->update(['role' => 'admin']);



    //     DB::table('users')
    //     ->updateOrInsert(['email' => 'john@example.com', 'name' => 'John'],
    //     ['password' => '123']
    // );

            
        // echo "<pre>"; print_r($users); echo "</pre>";



            // $countries = DB::table('countries')->paginate(10);
            // return view('countries.index',['countries' => $countries]);
            // }
            

            // $users= DB::table('users')->get()->random(1);
            // $user=$users[0];
            // $id=$user->id;
            // echo $id;
        
            // echo "<pre>"; print_r($users); echo "</pre>";



            // $flights = Flight::all();
           

            // $flights = Flight::where('active', 1)
            // ->orderBy('name','desc')
            // ->take(10) //limit(2)
            // ->get();


            // $flight = Flight::first();
            // $flight->number = 'FR 456';
            // $flight->refresh();



            // $flights = Flight::find(1);

            // // echo $flights. "<br>";

            // foreach ($flights as $flight) {
            //     echo $flight->name . "<br>";
            // }


            // $flights = new Flight();
            // $flight->name = "aaaa";
            // $flight->save();


            // $user = Auth::user();
            // echo $user->name;
            


            // $account = User::find(1)->account;
            // dd($account->toArray());


            $user = Order::find(3)->user;
            dd($user->toArray());



}
        
}