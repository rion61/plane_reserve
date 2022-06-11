<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/planeEdit_Save" method="post">
        @csrf
        <input typpe="text" name="id" value="{{$plane->id}}">
        <input typpe="text" name="date" value="{{$plane->date}}">
        <input typpe="text" name="departure_time" value="{{$plane->departure_time}}">
        <input typpe="text" name="arrival_time" value="{{$plane->arrival_time}}">
        <input typpe="text" name="departure" value="{{$plane->departure}}">
        <input typpe="text" name="arrival" value="{{$plane->arrival}}">
        <button>登録</button>
        <button><a href="/planeDelete/{{$plane->id}}">削除</a></button>
    </form>
    <a href="{{ url('/user') }}">戻る</a>
</body>
</html>