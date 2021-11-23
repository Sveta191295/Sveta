<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class CookieController extends Controller
{
    public function setCookie(Request $request) {
        $request->session()->put('key', 'value');
        $request->session()->put('key', 'value1');
        $request->session()->push('users', 'John');

        $minutes = 1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'Aram', $minutes));
        return $response;
        }
        public function getCookie(Request $request) {
        $value = $request->cookie('name');
        echo "Cookie value: " . $value;
        echo "<br> Session Value:" .  $request->session()->get('key');
        echo "Session array value: ";
        print_r($request->session()->get('key')) ;
        $request->session()->forget('key','users');
        //echo $value;
        }

    


       
}


