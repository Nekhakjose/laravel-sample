<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('task');
});*/

Route::get('/', function () {
    return view('home');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/task', function () {
    return view('task');
});


/*Route::get('posts', function() {
    return view('posts');
});


Route::get('posts/{post}',function($slug){
    $path= __Dir__. "/../resources/posts/{$slug}.html";

    if(!file_exists($path)){

    }
     $post=file_get_contents($path);
      return redirect('/');
    return view('post',[
        'post'=>$post
    ]);
});

Route::get('register',[RegisterController::class,'create'])->middleware('guest');;
Route::post('register',[RegisterController::class,'store'])->middleware('guest');;*/

