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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('login',[\App\Http\Controllers\Auth\LoginController::class,'showLogin'])->name('auth.login');
    Route::post('login',[\App\Http\Controllers\Auth\LoginController::class,'login']);
    Route::get('register',[\App\Http\Controllers\Auth\RegisterController::class,'showRegister'])->name('auth.register');
    Route::post('register',[\App\Http\Controllers\Auth\RegisterController::class,'Register']);
    Route::get('token',[\App\Http\Controllers\Auth\TokenController::class,'showToken'])->name('auth.phone.token');
    Route::post('token',[\App\Http\Controllers\Auth\TokenController::class,'token']);
});

