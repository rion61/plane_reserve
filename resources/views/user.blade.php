@extends('layouts.app')
@section('content')
<section>
    <div class="common-container">
        <a href="/top">戻る</a>
        <div class="main-title">
            <p>お客様情報</p>
        </div>
        <!-- フラッシュメッセージ -->
        @if (session('flash_message'))
            <div class="flash_message bg-warning text-black text-center py-2 my-0">
                {{ session('flash_message') }}
            </div>
        @endif
        <table class="create_edit_form">
            <tr>
                <th>お名前</th>
                <td>：　{{$user->name}}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>：　{{$user->tel}}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>：　{{$user->email}}</td>
            </tr>
        </table>
        <div class="user_link">
            <a href="/userEdit/{{$user->id}}"> <button type="submit" class="btn btn-primary reservation-btn">編集</button></a>
        </div>
    </div>
</section>
@endsection