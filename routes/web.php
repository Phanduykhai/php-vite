<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
// use App\Mail as Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('update-post/{id}','PostController@edit')->name('post.edit');
Route::put('update-post/{id}','PostController@update')->name('post.update');

Route::put("post/{post}", function (){

})->middleware("can:update,post");

Route::get("post", function (){

})->middleware("can:create,App\Post");
Route::get("send-mail", function (){
   $name = "phan duy khai";
   $message = "xin chao bon mat lon";
   $email = "duykhaikcr692005@gmail.com";
   $ojectMail
   Mail::to($email)->send(new \App\Mail\ContactMail($name, $message));
});