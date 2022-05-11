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
        <tr>
            <td>{{ $user->name}}</td>
            <td>{{ $user->tel}}</td>
            <td>{{ $user->email}}</td>
        </tr>
    </table>
    <a href="/userEdit/{{$user->id}}">編集</a>
    <br><br>
    <p><a href="{{ url('/user') }}">登録情報編集</a></p>
    <p><a href="{{ url('/member') }}">会員一覧</a></p>
    <p><a href="{{ url('/reservationList_planeSelect') }}">予約者一覧（飛行機選択）</a></p>
    <p><a href="{{ url('/plane') }}">飛行機作成</a></p>
    <p><a href="{{ url('/planeList') }}">飛行機一覧・編集・削除</a></p>
</body>
</html>