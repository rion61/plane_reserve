@extends('layouts.app')
@section('content')

<section>
    <div class="common-container">
        {{-- メニューバー --}}
        <a class="manager-link" href="/plane_list">戻る</a>
        <div class="main-title">
            <h1>飛行機便編集</h1>
        </div>
        <form action="/planeEdit_Save" method="post">
            @csrf
            <table class="create_edit_form">
                <tr>
                    <th>飛行機ID　：</th>
                    <td>{{$plane->id}}<input type="hidden" name="id" value="{{$plane->id}}"></td>
                </tr>
                <tr>
                    <th>日　　付　：</th>
                    <td><input type="text" class="create_edit_input" name="date" value="{{$plane->date}}"></td>
                </tr>
                <tr>
                    <th>出発時間　：</th>
                    <td><input type="text" class="create_edit_input" name="departure_time" value="{{$plane->departure_time}}"></td>
                </tr>
                <tr>
                    <th>到着時間　：</th>
                    <td><input type="text" class="create_edit_input" name="arrival_time" value="{{$plane->arrival_time}}"></td>
                </tr>
                <tr>
                    <th>出  発  地　：</th>
                    <td><input type="text" class="create_edit_input" name="departure" value="{{$plane->departure}}"></td>
                </tr>
                <tr>
                    <th>到  着  地　：</th>
                    <td><input type="text" class="create_edit_input" name="arrival" value="{{$plane->arrival}}"></td>
                </tr>
            </table>
            <div class="edit_btn_area">
                <button type="submit"  class="btn btn-primary reservation-btn">登　録</button>
            </div>
        </form>
        <a href="/planeDelete/{{$plane->id}}"><button class="btn btn-danger reservation-btn"class="airplane_edit_btn">削　除</button></a>
        {{-- onclick="location"  --}}
    </div>
</section>
@endsection
