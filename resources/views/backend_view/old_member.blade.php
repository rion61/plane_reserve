<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>

<body>
    {{-- 検索機能 --}}
    <form method="GET" action="/memberSearch">
        <input type="search" placeholder="名前を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
        <div>
            <button type="submit">検索</button>
            <button>
                <a href="{{ route('member') }}">
                    クリア
                </a>
            </button>
        </div>
    </form>
    {{-- 会員一覧 --}}
    <table  border="1">
        <tr>
            <th>名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
        </tr>
        @foreach($user as $value)
        <tr>
            <td>{{ $value->name}}</td>
            <td>{{ $value->tel}}</td>
            <td>{{ $value->email}}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ url('/user') }}">登録情報に戻る</a>
</body>
</html>