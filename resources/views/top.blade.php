@extends('layouts.app')
@section('content')

<section>
    <div class="common-container">
        <div class="main-title">
            <h1>予約したい飛行機を選択してください</h1>
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

            @foreach ($planes as $plane)
                <tr>
                    <td>{{ $plane->date }}</td>
                    <td>{{ $plane->departure_time }}</td>
                    <td>{{ $plane->arrival_time }}</td>
                    <td>{{ $plane->departure }}</td>
                    <td>{{ $plane->arrival }}</td>
                    <td><a href="{{ route('detail', ['id' => $plane->id]) }}">予約する</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
