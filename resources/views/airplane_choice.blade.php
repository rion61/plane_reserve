@extends('layouts.app')
@section('content')

<div class="container">

  <div class="table-title">
        <h1>飛行機選択一覧</h1>
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
            <td><a href="">予約者一覧</a></td>
        </tr>       
    </table>

</div>

@endsection