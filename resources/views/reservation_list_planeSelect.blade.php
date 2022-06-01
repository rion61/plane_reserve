@extends('layouts.app')
@section('content')

<section>
    <div class="common-container">
        {{-- メニューバー --}}
        <a class="manager-link" href="/manager">管理者トップ画面に戻る</a>
        <div class="main-title">
            <h1>予約者リスト</h1>
        </div>

        <table class="table table-striped plane_table">
            <tr>
                <th>飛行機ID</th>
                <th>日付</th>
                <th>出発時間</th>
                <th>到着時間</th>
                <th>出発地</th>
                <th>到着地</th>
                <th>　　　</th>
            </tr>
            @foreach($plane as $value)
            <tr>
                <td>{{ $value->id}}</td>
                <td>{{ $value->date}}</td>
                <td>{{ $value->departure_time}}</td>
                <td>{{ $value->arrival_time}}</td>
                <td>{{ $value->departure}}</td>
                <td>{{ $value->arrival}}</td>
                <td><a href="reservationList_member/{{$value->id}}">予約者一覧</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection