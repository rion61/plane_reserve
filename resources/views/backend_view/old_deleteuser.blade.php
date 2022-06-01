@extends('layouts.app')
@section('content')
    <div class="reserve">
        <table>
            <tr>
                <th>飛行機ID</th>
                <th>日付</th>
                <th>出発時間</th>
                <th>到着時間</th> 
                <th>出発地</th>
                <th>到着地</th>
                <th>　　　</th>
            </tr>

            <tr>
                <td>1</td>
                <td>5/1(月)</td>
                <td>17:35</td>
                <td>20:55</td>
                <td>東京</td>
                <td>大阪</td>
                <td><button class="modoru"onclick="clickEvent()">キャンセル</button></td>
            </tr>
        </table>
    </div>

    <div class="button">
        <button type=“button” onclick="event.preventDefault();location.href='{{ url('/reservelist')}}'">戻る</button>
    </div>
    <script>
        function clickEvent(){
        if (confirm('本当によろしいですか？')) {
        console.log('OKボタンが押されました。')
    } else {
        console.log('キャンセルボタンが押されました。')
    }
    }
    </script>
@endsection