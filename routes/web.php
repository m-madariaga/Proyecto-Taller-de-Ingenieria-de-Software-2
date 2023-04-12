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
Route::get('/',function(){
    return view('home');
})->name('/');

// Home
Route::get('home/page',[App\Http\Controllers\HomeController::class,'index'])->name('home/page');
Auth::routes();


// login
Route::get('form/login/view/new',[App\Http\Controllers\LoginController::class,'viewLogin'])->name('form/login/view/new');
Route::post('form/login',[App\Http\Controllers\LoginController::class,'login'])->name('form/login');
Route::get('form/logout',[App\Http\Controllers\LoginController::class,'logout'])->name('form/logout');

