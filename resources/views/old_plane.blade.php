<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/planeCreate" method="post">
        @csrf
        <input type="date" name="date" placeholder="日付">
        <input type="time" name="departure_time" placeholder="出発時間">
        <input type="time" name="arrival_time" placeholder="到着時間">
        <input type="text" name="departure" placeholder="出発地">
        <input type="text" name="arrival" placeholder="到着地">
        <button>登録</button>
    </form>
    <a href="{{ url('/user') }}">戻る</a>
</body>
</html>