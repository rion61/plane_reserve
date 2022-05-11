<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>これでよろしいでしょうか？</p>
    <form action="/planeCreate_Save" method="post">
        @csrf
        <input type="date" name="date" value="{{$plane->date}}">
        <input type="time" name="departure_time" value="{{$plane->departure_time}}">
        <input type="time" name="arrival_time" value="{{$plane->arrival_time}}">
        <input type="text" name="departure" value="{{$plane->departure}}">
        <input type="text" name="arrival" value="{{$plane->arrival}}">
        <button>登録</button>
    </form>
    <a href="{{ url('/user') }}">戻る</a>
</body>
</html>