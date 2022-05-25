<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>飛行機</h1>
    <table>
        <tr>
            <th>飛行機id</th>
            <th>日付</th>
            <th>出発時間</th>
            <th>到着時間</th>
            <th>出発地</th>
            <th>到着地</th>
        </tr>
        <tr>
            <td>{{ $plane->id}}</td>
            <td>{{ $plane->date}}</td>
            <td>{{ $plane->departure_time}}</td>
            <td>{{ $plane->arrival_time}}</td>
            <td>{{ $plane->departure}}</td>
            <td>{{ $plane->arrival}}</td>
        </tr>
    </table>
    <h2>予約者</h2>
    <table>
        <tr>
            <th>user_id</th>
            <th>名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
        </tr>
        @foreach($results as $result)
        <tr>
            <td>{{$result->id}}</td>
            <td>{{$result->name}}</td>
            <td>{{$result->tel}}</td>
            <td>{{$result->email}}</td>
        </tr>
        @endforeach
    </table>

    <a href="{{ url('/user') }}">戻る</a>
</body>
</html>
