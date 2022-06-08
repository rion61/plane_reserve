<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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



Auth::routes();

// welcome画面に遷移---------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

// ログイン成功画面に遷移------------------------------------------------------------------
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// 飛行機便の予約---------------------------------------------------------------------------

// TOPページの表示(飛行便の一覧から予約便を選択)
Route::get('/top',[ReserveController::class,'index'])->name('top');
// 選択した飛行機便のID取得し予約確認画面へ遷移
Route::get('/showdetail/{id}',[ReserveController::class,'show'])->name('detail');
// 飛行便の予約を確定する
Route::put('/completed/{id}', [ReserveController::class,'store'])->name('completed');
// ログインユーザーの予約情報確認画面の表示
Route::get('/mybooks',[BookController::class,'index'])->name('books');
// 予約削除確認画面
Route::get('/mybook/{id}',[BookController::class,'show'])->name('book');
// 予約の削除の決定
Route::post('/mybook{id}',[BookController::class,'update'])->name('delete');
// 飛行機の検索
Route::get('/planeSearch',[ReserveController::class,'planeSearch'])->name('planeSearch');


// ユーザー情報------------------------------------------------------------------------------------

//ユーザー情報の表示
Route::get('/user', [App\Http\Controllers\ManagerController::class, 'user'])->name('user');
//ユーザー情報の編集
Route::get('/userEdit/{id}', [App\Http\Controllers\ManagerController::class, 'userEdit'])->name('userEdit');
//ユーザー情報編集の決定
Route::post('/userEdit_Save', [App\Http\Controllers\ManagerController::class, 'userEdit_Save'])->name('userEdit_Save');



// 管理者権限---------------------------------------------------------------------------------------

Route::group(['middleware' => ['auth', 'can:system-only']], function () {

    // 管理者topページ
    Route::get('/manager', [ManagerController::class, 'manager'])->name('manager');
    //ユーザー一覧
    Route::get('/member_list', [App\Http\Controllers\ManagerController::class, 'member_list'])->name('member_list');
    //ユーザーの部分検索
    Route::get('/memberSearch', [App\Http\Controllers\ManagerController::class, 'memberSearch'])->name('memberSearch');
    //飛行機便の予約者リスト(飛行機便の選択画面)
    Route::get('/reservation_list_planeSelect', [App\Http\Controllers\ManagerController::class, 'reservation_list_planeSelect'])->name('reservation_list_planeSelect');
    //飛行機便の予約者リスト(飛行機便を選択しリスト画面に遷移)
    Route::get('/reservationList_member/{id}', [App\Http\Controllers\ManagerController::class, 'reservationList_member'])->name('reservationList_member');


    // 飛行機便の作成
    Route::get('/plane_create', [App\Http\Controllers\ManagerController::class, 'plane_create'])->name('plane_create');
    // 飛行機便作成の確認
    Route::post('/plane_create_check', [App\Http\Controllers\ManagerController::class, 'plane_create_check'])->name('plane_create_check');
    //飛行機作成決定
    Route::post('/planeCreate_Save', [App\Http\Controllers\ManagerController::class, 'planeCreate_Save'])->name('planeCreate_Save');
    //飛行機便の編集
    Route::get('/plane_edit/{id}', [App\Http\Controllers\ManagerController::class, 'plane_edit'])->name('plane_edit');
    //飛行機便の編集決定
    Route::post('/planeEdit_Save', [App\Http\Controllers\ManagerController::class, 'planeEdit_Save'])->name('planeEdit_Save');
    //飛行機便の削除
    Route::get('/planeDelete/{id}', [App\Http\Controllers\ManagerController::class, 'planeDelete'])->name('planeDelete');
    //飛行機便の一覧
    Route::get('/plane_list', [App\Http\Controllers\ManagerController::class, 'plane_list'])->name('plane_list');
});


// 管理者の情報修正--------------------------------------------------
Route::get('/manager_profile_edit', [App\Http\Controllers\SystemController::class, 'manager_profile_edit'])->name('manager_profile_edit');

Route::get('/confirmreserve', function () { return view('confirmreserve');});

Route::get('/deleteuser', function () {
    return view('deleteuser');
});