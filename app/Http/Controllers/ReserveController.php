<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Plane;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // 飛行機プラン選択一覧
        $planes = Plane::all();
        // トップ画面の表示
        //@return view
        return view('top', ["planes" => $planes]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
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
                // // ログイン中のユーザーが予約を確定する
        $plane = Plane::find($id);
        $user = Auth::user();
                // dd(count(Booking::where('plane_id',$plane->id)->where('user_id',$user->id)->get()) == 0);
                // dd($user->id && $plane->id);
                // dd($user,$plane);
                // dd($id);//選択した飛行機のid
                // dd($user->planes);//ログインしているユーザーの予約情報
                // dd($id);


        if (count(Booking::where('plane_id',$plane->id)->where('user_id',$user->id)->get()) > 0)
        {
            return redirect('mybooks')->with('flash_message', 'このプランは既に予約済みです');

        } else {

            $plane->users()->syncWithoutDetaching(Auth::user()->id);
            // 予約完了メッセージ
            return redirect('mybooks')->with('flash_message', '予約が完了しました');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //選択した飛行機情報を持って予約確認ページへ
        // 予約するボタンからの遷移
        // 選択した飛行機の情報を持ってくる
        $user = Auth::user();
        // dd($user->id);
        $plane = Plane::find($id);
        // dd($plane->id);

        //選択した飛行機プランの予約画面表示
        return view('user_reserve_confirm')->with(['user' => $user, 'plane' => $plane]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
