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

Auth::routes();

Route::get('/airplane_reserve', [App\Http\Controllers\SystemController::class, 'airplane_reserve'])->name('airplane_reserve');
Route::get('/airplane_create', [App\Http\Controllers\SystemController::class, 'airplane_create'])->name('airplane_create');
Route::get('/create_check', [App\Http\Controllers\SystemController::class, 'create_check'])->name('create_check');
Route::get('/airplane_edit', [App\Http\Controllers\SystemController::class, 'airplane_edit'])->name('airplane_edit');
Route::get('/manager_profile_edit', [App\Http\Controllers\SystemController::class, 'manager_profile_edit'])->name('manager_profile_edit');
Route::get('/airplane_list', [App\Http\Controllers\SystemController::class, 'airplane_list'])->name('airplane_list');
Route::get('/reserve_list', [App\Http\Controllers\SystemController::class, 'reserve_list'])->name('reserve_list');
Route::get('/member_list', [App\Http\Controllers\SystemController::class, 'member_list'])->name('member_list');