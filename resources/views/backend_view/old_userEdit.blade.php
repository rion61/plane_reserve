<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/userEdit_Save" method="post">
        @csrf
        <input typpe="text" name="name" value="{{$user->name}}">
        <input typpe="text" name="tel" value="{{$user->tel}}">
        <input typpe="text" name="email" value="{{$user->email}}">
        <button>登録</button>
    </form>
    <a href="{{ url('/user') }}">戻る</a>
</body>
</html>