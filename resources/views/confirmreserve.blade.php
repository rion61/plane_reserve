<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>予約確認画面</title>
</head>
<body>
<div class="reserve">
    <table>
        <tr>
            <th>日付</th>
            <th>出発時間</th>
            <th>到着時間</th> 
            <th>出発地</th>
            <th>到着地</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
        </tr>

        <tr>
            <td>5/1(月)</td>
            <td>17:35</td>
            <td>20:55</td>
            <td>東京</td>
            <td>大阪</td>
            <td>test太郎</td>
            <td>012345678</td>
            <td>test@test.com</td>
        </tr>
    </table>
    
    <button type=“button” onclick="location.href='{{ url('/agelink')}}'">予約確定</button>
    <button type=“button” onclick="location.href='{{ url('/agelink')}}'">戻る</button>
    
</div>
</body>
</html>