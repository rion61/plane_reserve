<!DOCTYPE html>

<!-- 文字コードの設定 -->
<!-- appのconfigのapp.phpの設定jaを取ってくる -->

<html lang="str_replace('_','-',app()->getLocale)">


<head>
    <!-- 文字コードの設定 -->
    <meta charset="UTF-8">

    <!-- 表示領域 -->
    <!-- ユーザーの使っている画面に合わせて表示 -->
    <meta name="viewport" content="width=device-widht,initial-scale=1">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- タイトル(多分表示される) -->
    <title>{{config('app.name','Laravel')}}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- 独自のCSSを反映する -->
    <link rel="stylesheet" href="{{asset('css/site.css')}}">

    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

</head>
<body>
    <div class="contents">
        <div class="header">
            <h1>飛行機予約システム</h1>
           <a href="{{ route('login') }}" class="button1">ログイン</a>
           <a href="{{ route('register') }}" class="button2">新規登録</a>
        </div>
        <div class="loopSlide">
  <ul>
    <li><img src="img/plane.jpeg" alt=""></li>
    <li><img src="img/plane1.jpeg" alt=""></li>
    <li><img src="img/plane2.jpeg" alt=""></li>
  </ul>
  <ul>
  <li><img src="img/plane.jpeg" alt=""></li>
    <li><img src="img/plane1.jpeg" alt=""></li>
    <li><img src="img/plane2.jpeg" alt=""></li>
  </ul>
</div>
    <div class="topimg">
        <p>最高な空の旅へ</p>
    </div>
</body>
</html>