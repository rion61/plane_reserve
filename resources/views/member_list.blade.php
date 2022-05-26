@extends('layouts.app')
@section('content')

<div class="container">
<form action="" method="get">
    <div class="searcharea">
         <div class="searcharea2">
    <input type="search" class="searchform" placeholder="キーワードを検索">
    <input type="submit" class="searchbtn" value="検索">        
         </div>
</div>
</form>
  <div class="table-title">
        <h1>会員一覧</h1>
    </div>            
        <table class="airplane_list_table"> 
        <tr>  
            <th>ID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>入会日</th>
        </tr>
        {{--@foreach($user as $value)--}}
        <tr>
            <td>$user->id</td>
            <td>$user->name</td>
            <td>$user->email</td>
            <td>$user->tel</td>
            <td>$user->created_at</td>
        </tr>     
        {{--@endforeach--}}   
    </table>
</div>

@endsection