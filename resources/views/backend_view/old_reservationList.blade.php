@extends('layouts.app')
@section('content')

<section>
    {{-- メニューバー --}}
    <a class="manager-link" href="/manager">管理者トップ画面に戻る</a>

    <div class="common-container">

        <div class="main-title">
            <h1>飛行機便予約者一覧</h1>
        </div>

        <table class="table table-striped plane_table">
            <tr>
                <th>飛行機ID</th>
                <th>日付</th>
                <th>出発時間</th>
                <th>到着時間</th>
                <th>出発地</th>
                <th>到着地</th>
            </tr>
            <tr>
                <td>{{ $plane->id}}</td>
                <td>{{ $plane->date}}</td>
                <td>{{ $plane->departure_time}}</td>
                <td>{{ $plane->arrival_time}}</td>
                <td>{{ $plane->departure}}</td>
                <td>{{ $plane->arrival}}</td>
            </tr>
        </table>

        <div class="main-title">
            <h2>予約者</h2>
        </div>

        <table class="plane_table table table-striped plane_table">
            <tr>
                <th>user_id</th>
                <th>名前</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
            </tr>
            @foreach($results as $result)
            <tr>
                <td>{{$result->id}}</td>
                <td>{{$result->name}}</td>
                <td>{{$result->tel}}</td>
                <td>{{$result->email}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection