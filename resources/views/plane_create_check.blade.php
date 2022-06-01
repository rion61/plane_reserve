@extends('layouts.app')
@section('content')

<section>
    <div class="common-container">
        {{-- メニューバー --}}
        <a href="/manager">管理者トップ画面に戻る</a>
        <div class="main-title">
            <h1>この情報で飛行機を作成しますか？</h1>
        </div>
        <form action="/planeCreate_Save" method="post">
            @csrf
            <table class="create_edit_form">
                <tr>
                    <th>日　付</th>
                    <td>：　{{$plane->date}}<input type="hidden" name="date" value="{{$plane->date}}"></td>
                </tr>
                <tr>
                    <th>出発時間</th>
                    <td>：　{{$plane->departure_time}}<input type="hidden" name="departure_time" value="{{$plane->departure_time}}"></td>
                </tr>
                <tr>
                    <th>到着時間</th>
                    <td>：　{{$plane->arrival_time}}<input type="hidden" name="arrival_time" value="{{$plane->arrival_time}}"></td>
                </tr>
                <tr>
                    <th>出 発 地</th>
                    <td>：　{{$plane->departure}}<input type="hidden" name="departure"  value="{{$plane->departure}}"></td>
                </tr>
                <tr>
                    <th>到 着 地</th>
                    <td>：　{{$plane->arrival}}<input type="hidden" name="arrival"  value="{{$plane->arrival}}"></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary reservation-btn">作成</button>
        </form>
        <button type=“button” class="btn btn-secondary reservation-btn" onclick="location.href='{{ url('/plane_create')}}'">戻る</button>
    </div>
</section>
@endsection