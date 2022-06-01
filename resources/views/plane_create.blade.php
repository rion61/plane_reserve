@extends('layouts.app')
@section('content')
<section>
    <div class="common-container">
        {{-- メニューバー -- --}}
        <a href="/manager">管理者トップ画面に戻る</a>
        <div class="main-title">
            <h1>飛行機作成</h1>
        </div>
        <form action="/plane_create_check" method="post">
            @csrf
            <table class="create_edit_form">
                <tr>
                    <th>日　　付</th>
                    <td>：　<input type="date" class="create_edit_input" name="date" placeholder=""></td>
                </tr>
                <tr>
                    <th>出発時間</th>
                    <td>：　<input type="time" class="create_edit_input" name="departure_time" placeholder=""></td>
                </tr>
                <tr>
                    <th>到着時間</th>
                    <td>：　<input type="time" class="create_edit_input" name="arrival_time" placeholder=""></td>
                </tr>
                <tr>
                    <th>出 発 地</th>
                    <td>：　<input type="text" class="create_edit_input"  name="departure" placeholder="出発地"></td>
                </tr>
                <tr>
                    <th>到 着 地</th>
                    <td>：　<input type="text" class="create_edit_input" name="arrival" placeholder="到着地"></td>
                </tr>
            </table>
        <button type="submit"  class="btn btn-primary reservation-btn">次へ</button>
        </form>
    </div>
</section>
@endsection
