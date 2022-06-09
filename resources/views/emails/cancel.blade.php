<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        {{ $user->name }} 様、
    </p>
    <p>
    ご予約を取り消しました。
    </p>
    <p>
    取り消した予約内容をご確認ください。
    </p>
    <table>
        <tr>
            <th>日付</th>
            <th>出発時間</th>
            <th>到着時間</th>
            <th>出発地</th>
            <th>到着地</th>
        </tr>
        <tr>
            <td>{{$plane->date}}</td>
            <td>{{$plane->departure_time}}</td>
            <td>{{$plane->arrival_time}}</td>
            <td>{{$plane->departure}}</td>
            <td>{{$plane->arrival}}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th>お名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
        </tr>
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->tel}}</td>
            <td>{{$user->email}}</td>
        </tr>
    </table>

    <p>&darr;&darr;&darr;&darr;予約の確認はこちら&darr;&darr;&darr;&darr;</p>
    <a href="{{ url('/mybooks/')}}">お客さまの予約一覧ページ</a>
</body>
</html>
