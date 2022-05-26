<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>ユーザー情報</title>
</head>
<body>
    <div class="box6">
    
        <div>
            <form action="#" method="post">
            @csrf
                <p>お名前 <br>
                test太郎</p>
                <p>メールアドレス <br>
                test@gmail.com</p>
                <p>電話番号  <br>
                012345678</p>
            </form>
            <br>
        <button type=“button” onclick="location.href='{{ url('/agelink')}}'">ホームページ</button>
        <button type=“button” onclick="location.href='{{ url('/edituser')}}'">編集画面</button>
        </div>
    </div>
</body>
</html>