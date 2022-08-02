<?php

use App\Http\Controllers\ListingController;
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

Route::get('/', [ListingController::class, "index"]);

Route::get('/listings/{listing}', [ListingController::class, "show"]);
Route::get('/listings/create', [ListingController::class, "create"]);

//Route::get("/hello/{id}", function($id){
//    return response("{'message':'Hello world laravel'}", 200)
//        ->header("Content-Type", "text/plain");
//
//})->where("id", "[0-9]+");
//
//Route::get("/post", function (Request $request){
////    ddd($request);
//    $name = $request->query("name");
//    $city = $request->query("city");
//    return response($name . " " . $city, 200);
//});
