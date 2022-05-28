@extends('layouts.app')
@section('content')

<div class="container">
<div class="back_btn">
        <a href="">戻る</a>         
</div>  
<div class="airplane_edit_title">
        <h1>飛行機編集</h1>
    </div>     
    <form action="" method="post">
        @csrf
             <table class="createform">
             <tr>
                   <th>飛行機ID</th>
                   <td><input type="text" class="table_form" name="id" value="$plane->id"></td>
               </tr>
               <tr>
                   <th>日付</th>
                   <td><input type="text" class="table_form" name="date" value="$plane->date"></td>
               </tr>
                <tr>
                    <th>出発時間</th>
                    <td><input type="text" class="table_form" name="departure_time" value="$plane->departure_time"></td>
                </tr>
                <tr>
                    <th>到着時間</th>
                    <td><input type="text" class="table_form" name="arrival_time" value="$plane->arrival_time"></td>
                </tr>
                <tr>
                    <th>出発地</th>
                    <td><input type="text" class="table_form"  name="departure"  value="$plane->departure"></td>
                </tr>
                <tr>
                    <th>到着地</th>
                    <td><input type="text" class="table_form" name="arrival"  value="$plane->arrival"></td>
                </tr>       
             </table>         
                <div class="edit_btn_area">
                       <button type="submit" onclick="location.href=''" class="airplane_edit_btn">削除</button>  
                       <button type="submit" class="airplane_edit_btn">登録</button>       
                </div>
         </form>  
</div>
@endsection
