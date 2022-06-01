<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plane;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    //会員の全件表示
    public function member_list(){

        $user = User::all();
        return view('member_list')->with([
        'user' => $user,
        ]);
    }

    //検索機能
    public function memberSearch(Request $request){

        //name、Email,Telの検索
        $search = $request->search;
        if ($search != '') {
            $post = user::where(DB::raw("CONCAT(name, email, tel)"),'like','%'.$search.'%')->orderBy('created_at','desc')->paginate(50);
        }else {      //クリア機能
        $post = user::orderBy('created_at','desc')->paginate(50);
        }
        return view('member_list')->with([
            'user' => $post,
            ]);
    }

    //会員の個人表示
    public function user(){

        $user = User::where('id','=',Auth::user()->id)->first();
        return view('user')->with([
        'user' => $user,
        ]);
    }

    //会員の個人編集確認
    public function userEdit(Request $request){

        $user = User::where('id','=',Auth::user()->id)->first();
        return view('user_edit')->with([
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
        return redirect('user')->with('flash_message', '正常に編集されました');;
}
    // 飛行機作成
    public function plane_create(){

        return view('plane_create');
    }

    // 飛行機作成確認
    public function  plane_create_check(Request $request){

        $plane = New Plane();

        $plane->date = $request->date;
        $plane->departure_time = $request->departure_time;
        $plane->arrival_time = $request->arrival_time;
        $plane->departure = $request->departure;
        $plane->arrival = $request->arrival;

        return view('plane_create_check')->with([
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

        return redirect('plane_list')->with('flash_message', '正常に作成されました');
    }
    

    // 飛行機一覧
    public function  plane_list(){

        $plane = Plane::all();

        return view('plane_list')->with([
            'plane' => $plane,
        ]);
    }

    // 飛行機編集
    public function  plane_edit(Request $request){

        $plane = Plane::where('id','=', $request->id)->first();

        return view('plane_edit')->with([
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

        return redirect('plane_list')->with('flash_message', '正常に編集されました');
    }

    // 飛行機削除
    public function  planeDelete(Request $request){

        $plane = Plane::where('id','=', $request->id)->first();

        $plane->delete();

        return redirect('plane_list')->with('flash_message', '正常に削除されました');
    }

    // 予約者リスト（飛行機選択）
    public function reservation_list_planeSelect(){

        $plane = Plane::all();

        return view('reservation_list_planeSelect')->with([
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
        return view('reservation_list',compact( 'results',))->with([
            'plane' => $plane,
        ]);
    }

    public function manager(){

        return view('manager');
    }
}