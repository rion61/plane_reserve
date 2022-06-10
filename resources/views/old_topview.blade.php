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
        
        {{-- JQuery --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/site.css')}}">
    </head>
    <body>
        <header id="header">
            <nav class="header">
                <ul class="header-nav">
                    <li>
                        <h1>飛行機予約システム</h1>
                    </li>
                    <li>
                        <ul class="header-nav">
                            <li>
                                <a class="nav-link" href="#">ログイン</a></div>
                            </li>
                            <li>
                                <a class="nav-link" href="#">新規登録</a></div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="top-img">
                <h2>今までにない思い出づくりを</h2>
                    <ul class="slide-items">
                        <li><img src="img/fv1.jpg" alt="Top画像"></li>
                        <li><img src="img/fv2.jpg" alt="Top画像"></li>
                        <li><img src="img/fv3.jpg" alt="Top画像"></li>
                        <li><img src="img/fv4.jpg" alt="Top画像"></li>
                        <li><img src="img/fv5.jpg" alt="Top画像"></li>
                    </ul>
                </div>
            </div>
        </main>
            <script>
                $(".slide-items").slick({
                    autoplay: true, // 自動再生
                    autoplaySpeed: 3500, // 再生速度（ミリ秒設定） 1000ミリ秒=1秒
                    fade: true, // スライドをフェードイン・フェードアウト
                    cssEase: 'linear',// アニメーション
                    speed: 700, // フェードアニメーションの速度設定
                });
        </script>
    </body>
</html>
