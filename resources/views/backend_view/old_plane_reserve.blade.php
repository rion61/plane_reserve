@extends('layouts.app')
@section('content')

<section>
    <a class="user-link" href="/user">プロフィール編集はこちらから</a>

    <div class="common-container">
        <div class="main-title">
            <h1>フライト一覧(予約便選択)</h1>
        </div>

        <table class="table table-striped plane_table">
            <tr>
                <th>日付</th>
                <th>出発時間</th>
                <th>到着時間</th>
                <th>出発地</th>
                <th>到着地</th>
                <th></th>
            </tr>
            @foreach($plane as $value)
            <tr>
                <td>{{ $value->date}}</td>
                <td>{{ $value->departure_time}}</td>
                <td>{{ $value->arrival_time}}</td>
                <td>{{ $value->departure}}</td>
                <td>{{ $value->arrival}}</td>
                {{-- <td><a href="showdetail/{{$value->id}}">予約</a></td> --}}
                <td><a href="{{ route('detail', ['id' => $value->id]) }}">&gt;&gt;予約する</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection