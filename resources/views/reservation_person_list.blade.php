@extends('layouts.app')
@section('content')

<div class="container">

  <div class="table-title">
        <h1>予約者一覧</h1>
    </div>     
    <div class="table-title">
        <p>飛行機</p>
    </div>          
        <table class="airplane_list_table"> 
        <tr>  
            <th>飛行機ID</th>
            <th>日付</th>
            <th>出発時間</th>
            <th>到着時間</th>
            <th>出発地</th>
            <th>到着地</th>
            
        </tr>
        <tr>
            <td><p>$value->id</p><input type="hidden" name="id" value=""></td>
            <td><p>$plane->date</p><input type="hidden" name="date" value=""></td>
            <td><p>$plane->departure_time</p><input type="hidden"  name="departure_time" value=""></td>
            <td><p>$plane->arrival_time</p><input type="hidden"  name="arrival_time" value=""></td>
            <td><p>$plane->departure</p><input type="hidden"  name="departure" value=""></td>
            <td><p>$plane->arrival</p><input type="hidden"  name="arrival" value=""></td>
        </tr>       
    </table>
    <div class="table-title">
        <p>予約者</p>
    </div> 
    <table class="airplane_list_table"> 
    <tr>  
            <th>ID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>入会日</th>
        </tr>
        {{--@foreach()--}}
        <tr>
            <td>$->id</td>
            <td>$->name</td>
            <td>$->email</td>
            <td>$->tel</td>
            <td>$->created_at</td>
        </tr>     
        {{--@endforeach--}}    
    </table>
</div>

@endsection