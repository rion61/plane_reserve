@extends('layouts.app')
@section('content')

<div class="container">
  <div class="table-title">
        <h1>飛行機一覧</h1>
    </div>            
        <table class="airplane_list_table"> 
         <tr>
            <th>飛行機ID</th>
            <th>日付</th>
            <th>出発時間</th>
            <th>到着時間</th>
            <th>出発地</th>
            <th>到着地</th>
            <th>編集/削除</th>
        </tr>
        {{--@foreach($plane as $value)--}}
        <tr>
            <td><p>$value->id</p><input type="hidden" name="id_list" value=""></td>
            <td><p>$value->date</p><input type="hidden" name="date_list" value=""></td>
            <td><p>$value->departure_time</p><input type="hidden"  name="departure_time_list" value=""></td>
            <td><p>$value->arrival_time</p><input type="hidden"  name="arrival_time_list" value=""></td>
            <td><p>$value->departure</p><input type="hidden"  name="departure_list" value=""></td>
            <td><p>$value->arrival</p><input type="hidden"  name="arrival_list" value=""></td>
            <td><a href="">編集/削除</a></td>
        </tr> 
        {{--@endforeach--}}      
    </table>

   
</div>

@endsection