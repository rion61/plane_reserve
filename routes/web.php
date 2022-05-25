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

Route::get('/user', function () {
    return view('user');
});

Route::get('/edituser', function () {
    return view('edituser');
});

Route::get('/confirmreserve', function () { return view('confirmreserve');});

Route::get('/deleteuser', function () {
    return view('deleteuser');
});

Route::get('/reservelist', function () {
    return view('reservelist');
});

//Route::get('/user',[App\Http\Controllers\HomeController::class, 'userinfo'])->name('user');

//Route::get('/edituser', [App\Http\Controllers\HomeController::class, 'edituser'])->name('esituser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
