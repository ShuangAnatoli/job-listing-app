<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


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
//all listings
Route::get('/', function () {
    return view('jobs', [
        "heading" => "Latest Jobs",
        "jobs" => Job::all()
    ]);
});
//single listings
Route::get("/jobs/{id}",function($id){
    return view("job",[
        "job" => Job::find($id)
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

