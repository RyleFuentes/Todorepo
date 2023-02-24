<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;

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

Route::get('/', function(){
    return view('welcome');
});

Route::post('todo', [dashboardController::class, 'store'])->name('todo_insert');
Route::resource('register', registerController::class);
Route::resource('login', loginController::class);
Route::post('login', [loginController::class, 'Auth'])->name('auth');
Route::resource('dashboard', dashboardController::class);
//Route::delete('done/{list_id}', [dashboardController::class, 'destroy'])->name('done');
Route::get('destroy/{id}', [dashboardController::class, 'destroy'])->name('delete');    
Route::get('logout', [dashboardController::class, 'logout'])->name('logout');    