@extends('layouts.app')
@section('content')

<section>
    <div class="common-container">
        <div class="main-title">
            <h1>予約したい飛行機を選択してください</h1>
        </div>
        <p>※<b>日付</b>と<b>出発地</b>からでも検索ができます</p>
        <form method="GET" action="/planeSearch" class="d-flex">
            <input  class="searchForm form-control me-2" type="date" aria-label="Search" name="search1" value="@if (isset($search1)) {{ $search1 }} @endif">
            <input  class="searchForm form-control me-2" type="text" aria-label="Search" name="search2" placeholder="出発地" value="@if (isset($search2)) {{ $search2 }} @endif">
            <button class="searchBtn btn btn-outline-success" type="submit">検索</button>
            <button class="clearBtn btn " type="submit"><a href="{{ route('top') }}">クリア</a></button>
        </form>
        <table class="table table-striped plane_table">
            <tr>
                <th>日付</th>
                <th>出発時間</th>
                <th>到着時間</th>
                <th>出発地</th>
                <th>到着地</th>
                <th>残り座席数</th>
                <th></th>
            </tr>

            @foreach ($planes as $plane)
                <tr>
                    <td>{{ $plane->date }}</td>
                    <td>{{ $plane->departure_time }}</td>
                    <td>{{ $plane->arrival_time }}</td>
                    <td>{{ $plane->departure }}</td>
                    <td>{{ $plane->arrival }}</td>
                    <td>{{ $plane->seat  - $plane->users_count}}</td>
                    <td>
                        @if( $plane->seat <=  $plane->users_count)
                            満席です
                        @else
                            <a href="{{ route('detail', ['id' => $plane->id]) }}">予約する</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
