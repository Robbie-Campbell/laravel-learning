<?php

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
//Route::get("/post/{post}", function($post){
//    $posts = [
//        "my-first-post" => "This is my first time using laravel!",
//        "my-second-post" => "It's still my first time!",
//    ];
//
//    if (! array_key_exists($post, $posts))
//    {
//        abort(404, "Sorry that post doesnt exist yet!");
//    }
//
//    return view("post", [
//        "post" => $posts[$post]
//    ]);
//});

Route::get('/posts/{post}', "App\Http\Controllers\PostsController@show");

Route::get('/test', function () {
    $name = request("name");
    $age = request("age");

    return view('test', [
        "name" => $name,
        "age" => $age
    ]);
});

Route::get("/", function (){
    return view("welcome");
});

Route::get("/contact", function (){
    return view("contact");
});
