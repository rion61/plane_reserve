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

//勝尾
Route::get('/airplane_reserve', [App\Http\Controllers\SystemController::class, 'airplane_reserve'])->name('airplane_reserve');
Route::get('/airplane_create', [App\Http\Controllers\SystemController::class, 'airplane_create'])->name('airplane_create');
Route::get('/airplane_check', [App\Http\Controllers\SystemController::class, 'airplane_check'])->name('airplane_check');
Route::get('/airplane_edit', [App\Http\Controllers\SystemController::class, 'airplane_edit'])->name('airplane_edit');
Route::get('/manager_profile_edit', [App\Http\Controllers\SystemController::class, 'manager_profile_edit'])->name('manager_profile_edit');
Route::get('/airplane_list', [App\Http\Controllers\SystemController::class, 'airplane_list'])->name('airplane_list');
Route::get('/reserve_list', [App\Http\Controllers\SystemController::class, 'reserve_list'])->name('reserve_list');
Route::get('/member_list', [App\Http\Controllers\SystemController::class, 'member_list'])->name('member_list');
Route::get('/reservation_person_list', [App\Http\Controllers\SystemController::class, 'reservation_person_list'])->name('reservation_person_list');
Route::get('/airplane_choice', [App\Http\Controllers\SystemController::class, 'airplane_choice'])->name('airplane_choice');
//勝尾ここまで

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//TOPページの表示
Route::get('/top',[ReserveController::class,'index'])->name('top');

//選択した飛行機情報を持って予約確認ページへ
Route::get('/showdetail/{id}',[ReserveController::class,'show'])->name('detail'
);

// ログイン中のユーザーが予約を確定する
Route::post('/completed/{id}', [ReserveController::class,'store'])->name('completed');

// ログインユーザーの予約情報確認画面の表示
Route::get('/mybooks',[BookController::class,'index'])->name('books');

// 予約削除確認画面
Route::get('/mybook/{id}',[BookController::class,'show'])->name('book');

// 予約の削除
Route::post('/mybook{id}',[BookController::class,'update'])->name('delete');

//個人情報の表示
Route::get('/user', [App\Http\Controllers\ManagerController::class, 'user'])->name('user');
//個人情報の編集
Route::get('/userEdit/{id}', [App\Http\Controllers\ManagerController::class, 'userEdit'])->name('userEdit');
//個人情報の編集
Route::post('/userEdit_Save', [App\Http\Controllers\ManagerController::class, 'userEdit_Save'])->name('userEdit_Save');


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
