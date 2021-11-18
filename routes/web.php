<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
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


Route::get('/user/{id}', [
    \App\Http\Controllers\UserController::class,
    'show'
    ]);


Route::get('/test', [
    \App\Http\Controllers\TestController::class,
    'index'
    ])->middleware(['first:editor']);

Route::get('/user/{id}', [
    \App\Http\Controllers\UserController::class,
    'show'
    ]);


Route::resource('photos', PhotoController::class);