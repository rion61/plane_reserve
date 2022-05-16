@extends('layouts.app')
@section('content')

<div class="container">

  <div class="table-title">
        <h1>会員一覧</h1>
    </div>            
        <table class="airplane_list_table"> 
        <tr>  
            <th>ID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>パスワード</th>
        </tr>
        {{--@foreach($user as $value)--}}
        <tr>
            <td>$user->id</td>
            <td>$user->name</td>
            <td>$user->email</td>
            <td>$user->tel</td>
            <td>$user->password</td>
        </tr>     
        {{--@endforeach--}}   
    </table>
</div>

@endsection