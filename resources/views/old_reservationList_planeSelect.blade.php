<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>日付</th>
            <th>出発時間</th>
            <th>到着時間</th>
            <th>出発地</th>
            <th>到着地</th>
            <th>　　　　</th>
        </tr>
        @foreach($plane as $value)
        <tr>
            <td>{{ $value->id}}</td>
            <td>{{ $value->date}}</td>
            <td>{{ $value->departure_time}}</td>
            <td>{{ $value->arrival_time}}</td>
            <td>{{ $value->departure}}</td>
            <td>{{ $value->arrival}}</td>
            <td><a href="reservationList_member/{{$value->id}}">予約者一覧</a></td>
        </tr>
        @endforeach
    </table>
    <a href="{{ url('/user') }}">戻る</a>
</body>
</html>
