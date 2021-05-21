<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\ViewActorController;



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

Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::resource('movies', MovieController::class);

Route::get('/index',[MovieController::class,'index']);

Route::get('/home', function () {
    return view('home');
});


Route::get('logout', '\App\Http\Controllers\Auth\MovieController@logout');

Route::get('/view_movies',[ViewController::class,'index']);

Route::get('/view_actor',[ViewActorController::class,'index']);


Route::get('/seats',[ViewController::class,'viewseat']);

Route::get('/create',[ActorController::class,'index']);

//Route::resource('actors','App\Http\Controllers\ActorController');

Route::resource('actors', ActorController::class);