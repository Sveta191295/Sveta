<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FileUpload;
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




Route::get('blade', function () {
    return view('child');
    });


Route::get('blade', function () {
    return view('child',['name' => 'Samantha']);
    });

    Route::get('blade', function () {
        return view('child',['records' => [1,2,3]]);
        });
    

Route::get('session/get', [SessionController::class,
'accessSessionData']);
Route::get('session/set', [SessionController::class,
    'storeSessionData']);
Route::get('session/remove', [SessionController::class,
    'deleteSessionData']);


Route::get('validation', [ValidationController::class,'showform']);
Route::post('validation', [ValidationController::class,'validateform']);



Route::get('blade', function () {
    return view('array',['arr' => [1,2,3]]);
    });
        

Route::get('/abc', [\App\Http\Controllers\ABCController::class, 'index']);



Route::get('/cache_set', function(){
    Cache::put('cachekey', 'I am in the cache!', 60 );
});//1 rope heto jnjvuma cache-y


Route::get('/cache_get', function(){
    return Cache::get('cachekey', 'default value' );
});


Route::get('/cache_forever', function() {
    Cache::forever('cachekey', 'I am in the cache!' );
});//cache-y pahpanvum e yndmisht


Route::get('/cache_get', function(){
    if (Cache::has('cachekey')) {
        return Cache::get('cachekey');
        }
});

Route::get('/cache_forever', function() {
    Cache::forever('cachekey', 'I am in the cache!' );
    Cache::forget('cachekey');
}); //jnjuma cache-y miangamic


Route::get(
    'collect1',
    [CollectionController::class, 'collection_class']);


Route::get(
    'collect2',
    [CollectionController::class,'collect_method']
    );



Route::get(
    'src_collection', 
    [CollectionController::class,'search_data']        
);

Route::get(
    'filter_collection',
    [CollectionController::class,'filter_data']
);



Route::get(
    'sort_collection',
    [CollectionController::class, 'sort_data']
    );


Route::get(
    'key_collection',
    [CollectionController::class,'read_keys']        
);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('product/create', [ProductController::class, 'create'])
->name('product.create');




Route::get('category/product/{product}', [ProductController::class,'category'])
->name('category.product.delete');


Route::get('/upload-file', [FileUpload::class, 'createForm']);

Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');


Route::get('/send/email',[EmailController::class,'sendEmail']);
    