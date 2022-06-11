<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>テスト飛行機予約画面</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<tbody>
    <p>こちらの情報を予約してもよろしいでしょうか？</p>
    <table class="table table-light table-bordered">
        <tr>
            <th>日付</th>
            <th>出発時間</th>
            <th>到着時間</th>
            <th>出発地</th>
            <th>到着地</th>
            <th></th>
            <th></th>
            <th>会員ID</th>
            <th>お名前</th>
            <th>電話番号</th>
            <th>email</th>
            <th></th>
        </tr>

        <tr>

            {{-- 選択した飛行機情報 --}}
            <td>{{$plane->date}}</td>
            <td>{{$plane->departure_time}}</td>
            <td>{{$plane->arrival_time}}</td>
            <td>{{$plane->departure}}</td>
            <td>{{$plane->arrival}}</td>
            <td></td>
            <td></td>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->tel}}</td>
            <td>{{$user->email}}</td>

        </tr>
    </table>

        {{-- 予約ボタン 予約確認画面 --}}
        <form method="post" action="{{ route('completed', $plane) }}">
            @method('put')
            @csrf
            <button type="submit" class="btn btn-danger w-50">予約を確定する</button>
        </form>

        {{-- 戻るボタン topへリダイレクト --}}
        <p><a href="{{ route('top') }}">&gt;&gt;戻る</a></p>

</tbody>

</html>
