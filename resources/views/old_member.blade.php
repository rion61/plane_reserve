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
            <th>名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
        </tr>
        @foreach($user as $value)
        <tr>
            <td>{{ $value->name}}</td>
            <td>{{ $value->tel}}</td>
            <td>{{ $value->email}}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ url('/user') }}">登録情報に戻る</a>
</body>
</html>