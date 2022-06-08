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
        //Top画面に予約枠を設ける
        $planes = Plane::withCount('users')->get();
            return view('top', ["planes" => $planes]);

        // Top画面に予約枠を設ける
        // $planes = Plane::all();
        // $tmp = Booking::select(DB::raw('plane_id,COUNT(plane_id) as plane_count'))->groupBy('plane_id')->get()->toArray();
        // $plane_counts=[];
        // foreach($tmp as $v){
        //     $plane_counts[$v['plane_id']] = $v['plane_count'];
        // }
        // return view('top', ["planes" => $planes, "planes"=>$plane_counts]);
        // dd($planes);
    }

    //飛行機便の絞り込み検索
    public function planeSearch(Request $request){

        // $planes = Plane::withCount('users')->get();

        $search1 = $request->search1;
        $search2 = $request->search2;

        // 日付あり、出発地なし
        if ($search1 != '' && $search2 == '') {
            $post = plane::where('date','like','%'.$search1.'%')->orderBy('created_at','desc')->withCount('users')->paginate(50);
        }
        // 日付なし、出発地あり
        elseif($search1 == '' && $search2 != '') {
            $post = plane::where('departure','like','%'.$search2.'%')->orderBy('created_at','desc')->withCount('users')->paginate(50);
        }
        // 日付あり、出発地あり
        elseif ($search1 != '' && $search2 != ''){
            $post = plane::where('date','like','%'.$search1.'%')->where('departure','like','%'.$search2.'%')->orderBy('created_at','desc')->withCount('users')->paginate(50);
        }
        // 日付なし、出発地なし
        else {
            $post = plane::orderBy('created_at','desc')->withCount('users')->paginate(50);
        }
            return view('top')->with([
                'planes' => $post, 'planes' => $post,
        ]);
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
        $plane = Plane::find($id);

        //選択された飛行機便の「予約数」を取得
        $count = Booking::where('plane_id','=',$id)->get()->count();

        //選択された飛行機便の「座席数」を取得し条件分岐
        if( $count >= $plane->seat ){
            return view('user_reserve_not');
        }else{

        //選択した飛行機IDをもって確認画面に遷移
        $user = Auth::user();
        $plane = Plane::find($id);
        return view('user_reserve_confirm')->with(['user' => $user, 'plane' => $plane]);
        }
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
