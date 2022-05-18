<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン中ユーザーの予約確認</title>
</head>

<body>
    <table class="table table-light table-bordered">
        <tr>
            <th>日付</th>
            <th>出発時間</th>
            <th>到着時間</th>
            <th>出発地</th>
            <th>到着地</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>

        {{-- 対象のbookingテーブルの飛行機情報を入れる --}}

        @foreach ($user->planes as $plane)
            <tr>
                {{-- 選択した飛行機情報 --}}
                <td>{{ $plane->date }}</td>
                <td>{{ $plane->departure_time }}</td>
                <td>{{ $plane->arrival_time }}</td>
                <td>{{ $plane->departure }}</td>
                <td>{{ $plane->arrival }}</td>
                <td><td>
                </td></td>
                <td><a href="{{ route('book', ['id' => $plane->id]) }}">&gt;&gt;予約を取り消す</a></td>
            </tr>
        @endforeach
    </table>

    <br>
    <a href="{{ route('top') }}">&gt;&gt;戻る</a></td>
</body>

</html>
