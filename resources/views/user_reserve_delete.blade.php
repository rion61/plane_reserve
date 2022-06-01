@extends('layouts.app')
@section('content')

<section>
    <div class="common-container">
        <div class="main-title">
            <p>こちらの情報を予約を取り消してよろしいでしょうか？</p>
        </div>
        <table class="table table-striped plane_table">
            <tr>
                <th>日付</th>
                <th>出発時間</th>
                <th>到着時間</th>
                <th>出発地</th>
                <th>到着地</th>
            </tr>
            <tr>
                {{-- 選択した飛行機情報 --}}
                <td>{{$plane->date}}</td>
                <td>{{$plane->departure_time}}</td>
                <td>{{$plane->arrival_time}}</td>
                <td>{{$plane->departure}}</td>
                <td>{{$plane->arrival}}</td>
            </tr>
        </table>
        {{-- 予約取り消しボタン --}}
        <form method="post" action="{{ route('delete',$plane) }}">
            {{-- @method('delete') --}}
            @csrf
            <button type="submit" class="btn btn-danger reservation-btn">予約を取り消す</button>
            {{-- 戻るボタン --}}
        </form>
        <a href="{{ route('books') }}"><button type="submit" class="btn btn-secondary reservation-btn">戻る</button></a>
    </div>
</section>
@endsection
