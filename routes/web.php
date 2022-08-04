<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

// Listings CRUD
Route::get('/', [ListingController::class, 'index']);
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
Route::post('/listings', [ListingController::class, 'store']);
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Users CRUD
Route::get("/register", [UserController::class, 'create'])->middleware('guest');
Route::post("/users", [UserController::class, 'store'])->middleware('guest');

//authentication
Route::get("/login", [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post("/users/authenticate", [UserController::class, 'authenticate']);
Route::POST("/logout", [UserController::class, 'logout'])->middleware('auth');


















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
