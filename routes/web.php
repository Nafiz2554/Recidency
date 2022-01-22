<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AccountController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\RentController;
use App\Http\Controllers\Frontend\SecurityController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\PropertyController;
use App\Http\Controllers\Frontend\BlogController;


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
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/property',[PropertyController::class,'property']);
Route::get('/blog',[BlogController::class,'blog']);
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/cleaning',[ServiceController::class,'cleaning']);
Route::get('/deep_cleaning',[ServiceController::class,'deepCleaning']);
Route::get('/documentation',[ServiceController::class,'documentationService']);
Route::get('/rent',[ServiceController::class,'rentService']);

 
