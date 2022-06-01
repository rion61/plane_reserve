@extends('layouts.app')
@section('content')

<section id="plane_reserve" class="container">
    <div class="common-container">
        {{-- メニューバー --}}
        <a class="manager-link" href="/manager">管理者トップ画面に戻る</a>
        <div class="main-title">
            <h1>飛行機一覧</h1>
        </div>
        <!-- フラッシュメッセージ -->
        @if (session('flash_message'))
        <div class="flash_message bg-warning text-black text-center py-2 my-0">
            {{ session('flash_message') }}
        </div>
        @endif
        <table class="table table-striped plane_table">
            <tr>
                <th>飛行機ID</th>
                <th>日付</th>
                <th>出発時間</th>
                <th>到着時間</th>
                <th>出発地</th>
                <th>到着地</th>
                <th>編集/削除</th>
            </tr>
            @foreach($plane as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->date}}</td>
                <td>{{$value->departure_time}}</td>
                <td>{{$value->arrival_time}}</td>
                <td>{{$value->departure}}</td>
                <td>{{$value->arrival}}</td>
                <td><a href="plane_edit/{{$value->id}}">編集/削除</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection