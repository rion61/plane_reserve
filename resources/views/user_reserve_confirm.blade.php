@extends('layouts.app')
@section('content')
<section>
    <div class="common-container">
        <div class="main-title">
            <p>この飛行機を予約してよろしいでしょうか</p>
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
                <td>{{$plane->date}}</td>
                <td>{{$plane->departure_time}}</td>
                <td>{{$plane->arrival_time}}</td>
                <td>{{$plane->departure}}</td>
                <td>{{$plane->arrival}}</td>
            </tr>
        </table>
        <div>
            <form method="post" action="{{ route('completed', $plane) }}">
                @method('put')
                @csrf
                <button type="submit" class="btn btn-primary reservation-btn">予約</button>
            </form>
            <button type=“button” class="btn btn-secondary reservation-btn" onclick="location.href='{{ url('/top')}}'">戻る</button>
        </div>
    </div>
</section>
@endsection