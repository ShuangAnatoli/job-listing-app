<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('jobs', [
        "heading" => "Latest Jobs",
        "jobs" => [[
            "id" => 1,
            "title" => "Data Analyst",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida est non elementum ultricies. Vestibulum eget mattis lorem, id condimentum dolor. Mauris sollicitudin consequat bibendum. Sed eget ante ac sapien blandit eleifend at sed odio. Quisque feugiat odio quis ligula vestibulum, sed tempor nisl sodales."
        ],
        [
            "id" => 2,
            "title" => "Data Scientist",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida est non elementum ultricies. Vestibulum eget mattis lorem, id condimentum dolor. Mauris sollicitudin consequat bibendum. Sed eget ante ac sapien blandit eleifend at sed odio. Quisque feugiat odio quis ligula vestibulum, sed tempor nisl sodales."
        ]   
        ]
    ]);
});

// Route::get("/home", function(){
//     return response("<h1>Hello!</h1>", 200)
//     -> header("Content-type", "text/plain")
//     -> header("foo", "bar");
// });

// Route::get("/posts/{id}", function($id){
//     ddd($id);
//     return response("Post". $id);
// })->where("id", '[0-9]+');

// Route::get("/search", function(Request $request){
//     return response($request->name . " " . $request->city);
// });

