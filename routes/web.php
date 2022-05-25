<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//TOPページの表示
Route::get('/top',[ReserveController::class,'index'])->name('top');

//選択した飛行機情報を持って予約確認ページへ
Route::get('/showdetail/{id}',[ReserveController::class,'show'])->name('detail'
);

// ログイン中のユーザーが予約を確定する
Route::put('/completed/{id}', [ReserveController::class,'store'])->name('completed');

// ログインユーザーの予約情報確認画面の表示
Route::get('/mybooks',[BookController::class,'index'])->name('books');

// 予約削除確認画面
Route::get('/mybook/{id}',[BookController::class,'show'])->name('book');

// 予約の削除
Route::post('/mybook{id}',[BookController::class,'update'])->name('delete');
