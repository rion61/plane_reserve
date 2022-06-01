@extends('layouts.app')
@section('content')

<div class="container">
<div class="back_btn">
                 <a href="">戻る</a>         
                </div>
<div class="manager_profile_title">
        <h1>管理者プロフィール</h1>
    </div>   
    <form action="" method="post">
             <table class="createform">
               <tr>
                   <th>名前</th>
                   <td><input type="text" class="table_form" name="name" value="$user->name"></td>
               </tr>
               <tr>
                   <th>メールアドレス</th>
                   <td><input type="text" class="table_form" name="email" value="$user->email"></td>
               </tr>
               <tr>
                   <th>電話番号</th>
                   <td><input type="text" class="table_form" name="tel" value="$user->tel"></td>
               </tr>

             </table>         
             <button type="submit" class="create_check_btn">編集</button>
             </form>
</div>

@endsection