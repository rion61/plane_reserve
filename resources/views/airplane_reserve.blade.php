@extends('layouts.app')
@section('content')

<div class="container">
<div class="user_edit_btn">
    <a href="">ユーザープロフィール編集</a>         
</div>
  <div class="table-title">
        <h1>フライト一覧</h1>
    </div>            
        <table class="airplane_list_table"> 
        <tr>  
            <th>日付</th>
            <th>出発時間</th>
            <th>到着時間</th>
            <th>出発地</th>
            <th>到着地</th>
            <th></th>
        </tr>
        <tr>
            <td><p>$plane->date</p><input type="hidden" name="date" value=""></td>
            <td><p>$plane->departure_time</p><input type="hidden"  name="departure_time" value=""></td>
            <td><p>$plane->arrival_time</p><input type="hidden"  name="arrival_time" value=""></td>
            <td><p>$plane->departure</p><input type="hidden"  name="departure" value=""></td>
            <td><p>$plane->arrival</p><input type="hidden"  name="arrival" value=""></td>
            <td><a href="">予約</a></td>
        </tr>       
    </table>

</div>

@endsection