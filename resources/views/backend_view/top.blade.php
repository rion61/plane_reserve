<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>確認用</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>

<body>
    {{-- ログイン中のユーザーの予約情報の一覧ページへ --}}
    <a href="{{ route('books')}}">&gt;&gt;予約確認</a></td>

    <a href="">&gt;&gt;登録情報確認</a></td>
    <a href="{{ route('home') }}">&gt;&gt;ホームに戻る</a></td>
    <!-- フラッシュメッセージ -->
    @if (session('successMessage'))
        <div class="alert alert-success">
            {{ session('successMessage') }}
        </div>
    @endif
    <table class="table table-light table-bordered">
        <tr>
            <th>日付</th>
            <th>出発時間</th>
            <th>到着時間</th>
            <th>出発地</th>
            <th>到着地</th>
            <th></th>
        </tr>

        @foreach ($planes as $plane)
            <tr>
                <td>{{ $plane->date }}</td>
                <td>{{ $plane->departure_time }}</td>
                <td>{{ $plane->arrival_time }}</td>
                <td>{{ $plane->departure }}</td>
                <td>{{ $plane->arrival }}</td>

                <td><a href="{{ route('detail', ['id' => $plane->id]) }}">&gt;&gt;予約する</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
