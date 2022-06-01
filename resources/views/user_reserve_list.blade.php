@extends('layouts.app')
@section('content')
<section>
    <div class="common-container">
        <div class="main-title">
            <h1>お客様の飛行機予約情報</h1><br>
        </div>
        {{-- フラッシュメッセージ --}}
        @if (session('flash_message'))
            <div class="flash_message bg-warning text-black text-center py-2 my-0">
                {{ session('flash_message') }}
            </div>
        @endif
        <table class="table table-striped plane_table">
            <tr>
                <th>予約日</th>
                <th>出発時間</th>
                <th>到着時間</th>
                <th>出発地</th>
                <th>到着地</th>
                <th>　　　</th>
            </tr>
            @foreach ($user->planes as $plane)
            <tr>
                {{-- 予約した飛行機情報 --}}
                <td>{{ $plane->date }}</td>
                <td>{{ $plane->departure_time }}</td>
                <td>{{ $plane->arrival_time }}</td>
                <td>{{ $plane->departure }}</td>
                <td>{{ $plane->arrival }}</td>
                <td><a href="{{ route('book', ['id' => $plane->id]) }}">予約を取り消す</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection