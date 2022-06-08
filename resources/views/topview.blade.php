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
         <div class="headtitle">
        <h1>飛行機予約システム</h1>
         </div>
    <div class="buttonarea"> <a href="#">ログイン</a></div>
        </div>
 
    <div class="topimg">
    <div class="slider">
        <div class="slider-inner">
            <div class="slider-item"><img class="item" src="img/plane.jpeg"></div>
            <div class="slider-item"><img class="item" src="img/plane1.jpeg"></div>
            <div class="slider-item"><img class="item" src="img/plane2.jpeg"></div>
        </div>
    </div>
    <p>最高な空の旅へ〜</p>
    </div>
    </div>
</body>
</html>