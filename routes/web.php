<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\CookieController;
use Illuminate\http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('foo', function () {
    return 'Hello World';
});
    

// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });

Route::get('posts/{post}/comments/{comment}', 
    function ($postId, $commentId) {
        return $postId . " " . $commentId;
    }
);


Route::get('/test', [
    \App\Http\Controllers\TestController::class,
    'index'
    ])->middleware(['age', 'role:editor']);
    
Route::get('/terminate', [
\App\Http\Controllers\ABCController::class,
'index'
])->middleware('terminate');


Route::get('/terminate', [
    \App\Http\Controllers\ABCController::class,
    'index'
    ])->middleware('terminate');


// Route::get('/user/{id}', [
//     \App\Http\Controllers\UserController::class,
//     'show'
//     ]);


Route::get('/test', [
    \App\Http\Controllers\TestController::class,
    'index'
    ])->middleware(['first:editor']);

// Route::get('/user/{id}', [
//     \App\Http\Controllers\UserController::class,
//     'show'
//     ]);


Route::resource('photos', PhotoController::class);


Route::get('/user/{id}', [
    \App\Http\Controllers\UserController::class,
    'show'
    ]);

Route::get('/register',function() {
    return view('register');
    });

Route::post(
    '/user/register',       
    [UserRegistration::class,         
    'postRegister']
        );


Route::get('/basic_response', function () {
    return 'Hello World';
    });

Route::get('/array_route', function () {
    return [1, 2, 3];
    });

Route::get('/header',function() {
    return response("Hello", 200)
    ->header('Content-Type', 'text/html');
    });
    
        
Route::get('json',function() {
    return response()->json([
        'name' => 'Barack Obama', 
        'state' => 'Illinois'
    ]);
});
    

Route::get('dashboard', function () {
    return redirect('user/1');
    });
    
Route::get('dashboard', function () {
    return redirect()->route('user', ['id' => 1]);

 });
        
 Route::get('dashboard', function () {
    return redirect()->away('https://www.google.com');
 });

 Route::get('dashboard', function () {
    return response('Hello World')->cookie(
        'name', 'value', 60);
        
 });



 Route::get('/header',function(Request $request) {
    $value = $request->cookie('name');
    echo $value;

    });

Route::get(
    '/cookie/set',
    [CookieController::class,'setCookie']
);


Route::get(
    '/cookie/get',
    [CookieController::class,'getCookie']
);        


Route::post(
    '/user/register', 
    [UserRegistration::class, 'postRegister']
    );
    
        
Route::get('/greeting', function () {
    return view('greeting', [
    'name' => 'James'
    ]);
});
    