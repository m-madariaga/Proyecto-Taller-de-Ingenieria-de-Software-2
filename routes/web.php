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
    return view('auth/login');
});

Route::group(['middleware' => ['permission:vista admin'], 'prefix' => 'admin'], function () {
    Route::get('/welcome',function(){
        return view('admin_welcome');
    })->name('admin');

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');


});


Route::group(['middleware' => ['permission:vista analista'], 'prefix' => 'analista'], function () {
    //insertar rutas de analista aqui
    Route::get('/welcome',function(){
        return view('analista_welcome');
    })->name('analista');
});

Route::group(['middleware' => ['permission:vista trabajador'], 'prefix' => 'trabajador'], function () {
    Route::get('/welcome',function(){
        return view('trabajador_welcome');
    })->name('trabajador');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





