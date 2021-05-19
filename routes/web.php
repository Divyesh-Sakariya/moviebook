<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ViewController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('movies', MovieController::class);

Route::get('/index',[MovieController::class,'index']);

Route::get('logout', '\App\Http\Controllers\Auth\MovieController@logout');

Route::get('/view_movies',[ViewController::class,'index']);

Route::get('/view_movies',[ViewController::class,'index']);

<<<<<<< HEAD
Route::get('/view_movies',[ViewController::class,'index']);
=======
Route::get('/seats',function(){
    return view('seats');
});
>>>>>>> f8d87b629ea2a4fae4384e5e5aff91c4eb9844ee
