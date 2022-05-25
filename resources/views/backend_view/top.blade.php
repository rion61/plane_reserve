@extends('layouts.app')
@section('content')
    {{-- ログイン中のユーザーの予約情報の一覧ページへ --}}
    <a href="{{ route('books') }}">&gt;&gt;予約確認</a></td>

    <a href="">&gt;&gt;登録情報確認</a></td>

    <!-- フラッシュメッセージ -->
    @if (session('flash_message'))
        <div class="flash_message bg-success text-center py-3 my-0">
            {{ session('flash_message') }}
        </div>
    @endif

    <table class="table table-light table-bordered">
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

                <td><a href="{{ route('detail', ['id' => $plane->id]) }}">&gt;&gt;予約する</a></td>
            </tr>
        @endforeach
    </table>
@endsection
