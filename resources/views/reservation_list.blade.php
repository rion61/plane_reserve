@extends('layouts.app')
@section('content')

<section>
    <div class="common-container">
        {{-- メニューバー --}}
        <a class="manager-link" href="/reservation_list_planeSelect">飛行機選択画面に戻る</a>
        <div class="plane_reserve-list">
            <p>飛行機情報</p>
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

        <div class="plane_reserve-list">
            <p>予約者一覧</p>
        </div>
        <table class="table table-striped plane_table">
            <tr>
                <th>会員ID</th>
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