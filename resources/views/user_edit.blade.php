@extends('layouts.app')
@section('content')
<!-- バリデーションエラーの表示 -->
@include('errors.varidate')
<section>
    <div class="common-container">
        <form action="/userEdit_Save" method="post">
            @csrf
            <div class="main-title">
                <p>お客様情報を修正してください</p>
            </div>
            <table class="create_edit_form">
                <tr>
                    <th>お名前</th>
                    <td>：　<input type="text" name="name" class="create_edit_input" value="{{$user->name}}"></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>：　<input typpe="text" name="tel" class="create_edit_input" value="{{$user->tel}}"></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>：　<input typpe="text" name="email" class="create_edit_input" value="{{$user->email}}"></td>
                </tr>
            </table>
                <div class="user_link">
                    <button type="submit" class="btn btn-primary reservation-btn">登録</button>
                </div>
        </form>
        <button type=“button” class="btn btn-secondary reservation-btn" onclick="event.preventDefault();location.href='{{ url('/user')}}'">戻る</button>
    </div>
</section>
@endsection