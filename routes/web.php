<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ManagerController;

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


/*-----------------------------------------------------------
gate機能を実装
-------------------------------------------------------------*/

/*----------------
管理者のみに権限
----------------*/
Route::group(['middleware' => ['auth', 'can:system-only']], function () {

    //飛行機作成画面
    Route::get('/plane', [App\Http\Controllers\ManagerController::class, 'plane'])->name('plane');
    //飛行機作成確認
    Route::post('/planeCreate', [App\Http\Controllers\ManagerController::class, 'planeCreate'])->name('planeCreate');
    //飛行機作成決定
    Route::post('/planeCreate_Save', [App\Http\Controllers\ManagerController::class, 'planeCreate_Save'])->name('planeCreate_Save');
    //飛行機一覧
    Route::get('/planeList', [App\Http\Controllers\ManagerController::class, 'planeList'])->name('planeList');
    //飛行機編集
    Route::get('/planeEdit/{id}', [App\Http\Controllers\ManagerController::class, 'planeEdit'])->name('planeEdit');
    //飛行機編集決定
    Route::post('/planeEdit_Save', [App\Http\Controllers\ManagerController::class, 'planeEdit_Save'])->name('planeEdit_Save');
    //飛行機削除決定
    Route::get('/planeDelete/{id}', [App\Http\Controllers\ManagerController::class, 'planeDelete'])->name('planeDelete');


    //予約者リスト(飛行機選択)
    Route::get('/reservationList_planeSelect', [App\Http\Controllers\ManagerController::class, 'reservationList_planeSelect'])->name('reservationList_planeSelect');
    //予約者リスト
    Route::get('/reservationList_member/{id}', [App\Http\Controllers\ManagerController::class, 'reservationList_member'])->name('reservationList_member');

    //会員一覧
    Route::get('/member', [App\Http\Controllers\ManagerController::class, 'member'])->name('member');
    //会員一覧画面で部分検索
    Route::get('/memberSearch', [App\Http\Controllers\ManagerController::class, 'memberSearch'])->name('memberSearch');
    // ログインで画面遷移
    Route::get('redirects', [App\Http\Controllers\App\Http\Controllers\LoginController::class, 'index']);
});

/*----------------
全ユーザに権限
----------------*/
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    //個人情報の表示
    Route::get('/user', [App\Http\Controllers\ManagerController::class, 'user'])->name('user');
    //個人情報の編集
    Route::get('/userEdit/{id}', [App\Http\Controllers\ManagerController::class, 'userEdit'])->name('userEdit');
    //個人情報の編集
    Route::post('/userEdit_Save', [App\Http\Controllers\ManagerController::class, 'userEdit_Save'])->name('userEdit_Save');
});


//勝尾さんのルート
Route::get('/views', [App\Http\Controllers\SystemController::class, 'managerhome'])->name('managershome');

