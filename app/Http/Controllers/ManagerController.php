<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plane;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    //会員の全件表示
    public function member(){

    $user = User::all();
    return view('old_member')->with([
    'user' => $user,
    ]);
    }

    //会員の個人表示
    public function user(){

    $user = User::where('id','=',Auth::user()->id)->first();
    return view('old_user')->with([
    'user' => $user,
    ]);
    }

    //会員の個人編集確認
    public function userEdit(Request $request){

        $user = User::where('id','=',Auth::user()->id)->first();
        return view('old_userEdit')->with([
            'user' => $user,
        ]);
    }

    //会員の個人編集決定
    public function userEdit_Save(Request $request){

        $user = User::where('id','=',Auth::user()->id)->first();
        $user->name = $request->name;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->save();
        return view('old_view_edit');
}
    // 飛行機作成
    public function plane(){

        return view('old_plane');
    }

    // 飛行機作成確認
    public function  planeCreate(Request $request){

        $plane = New Plane();

        $plane->date = $request->date;
        $plane->departure_time = $request->departure_time;
        $plane->arrival_time = $request->arrival_time;
        $plane->departure = $request->departure;
        $plane->arrival = $request->arrival;

        return view('old_plane_create')->with([
            'plane' => $plane,
        ]);
    }

    // 飛行作成登録
    public function  planeCreate_Save(Request $request){

        $plane = New Plane();

        $plane->date = $request->date;
        $plane->departure_time = $request->departure_time;
        $plane->arrival_time = $request->arrival_time;
        $plane->departure = $request->departure;
        $plane->arrival = $request->arrival;
        $plane->save();

        return view('old_view_edit');
    }

    // 飛行機一覧
    public function  planeList(){

        $plane = Plane::all();

        return view('old_plane_list')->with([
            'plane' => $plane,
        ]);
    }

    // 飛行機編集
    public function  planeEdit(Request $request){

        $plane = Plane::where('id','=', $request->id)->first();

        return view('old_plane_edit')->with([
            'plane' => $plane,
        ]);
    }

    // 飛行機編集登録
    public function  planeEdit_Save(Request $request){

        $plane = Plane::where('id','=', $request->id)->first();

        $plane->date = $request->date;
        $plane->departure_time = $request->departure_time;
        $plane->arrival_time = $request->arrival_time;
        $plane->departure = $request->departure;
        $plane->arrival = $request->arrival;
        $plane->save();

        return view('old_view_edit');
    }

    // 飛行機削除
    public function  planeDelete(Request $request){

        $plane = Plane::where('id','=', $request->id)->first();

        $plane->delete();

        return view('old_view_edit');
    }

    // 予約者リスト（飛行機選択）
    public function reservationList_planeSelect(){

        $plane = Plane::all();

        return view('old_reservationList_planeSelect')->with([
            'plane' => $plane,
        ]);
    }

    // 予約者リスト
    public function reservationList_member(Request $request){

        //飛行機idを取得
        $plane = Plane::where('id','=',$request->id)->first();

        // 予約テーブルとuserテーブルの結合からデータ取得
        $this->booking = New Booking();
        $results = $this->booking->getUserNameById($request->id);
        return view('old_reservationList',compact( 'results',))->with([
            'plane' => $plane,
        ]);
    }
}