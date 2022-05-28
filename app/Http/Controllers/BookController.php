<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Plane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ログインユーザーの予約済み飛行機一覧表示
        $user = Auth::user();
        // dd($user->planes);
        return view('backend_view.my_book', ['user' => $user]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reserve()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 予約キャンセル確認画面
        // dd($id);
        $user = Auth::user();
        // dd($user->plane);
        // 対象の予約を探す
        $plane = Plane::find($id);
        // dd($plane);
        return view('backend_view.delete_detail')->with(['plane' => $plane, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 対象の予約を取り出す
        $plane = Plane::find($id);
        // ユーザーと予約した飛行機の紐付けを解除する
        $plane->users()->detach(Auth::user()->id);
        // 予約完了メッセージ
        //トップページに戻る
        return redirect('top')->with('flash_message', '予約を削除しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
    }
}
