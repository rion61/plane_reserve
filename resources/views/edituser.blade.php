<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>編集画面</title>
</head>
<body>
 <div style="width: 500px; text-align:center; margin: 100px auto;">
<form action="#" method="post">
@csrf
    <p>お名前 <br>
	<input type="text" value="test太郎"></p>
	<p>メールアドレス <br>
	<input type="text" value="test@gmail.com"></p>
    <p>電話番号  <br>
    <input type="text" value="012345678"></p>

    <button type=“button” onclick="location.href='{{ url('/user')}}'">戻る</button>
 </div>
</form>
</body>
</html>