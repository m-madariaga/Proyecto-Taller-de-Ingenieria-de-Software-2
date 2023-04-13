<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller\UserController;

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
    return view('admin_welcome');
})->name('/')->middleware('auth');


Route::get('/analista',function(){
    return view('analista_welcome');
})->name('analista')->middleware('auth');

Route::get('/trabajador',function(){
    return view('trabajador_welcome');
})->name('trabajador')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/{run}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{run}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{run}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

