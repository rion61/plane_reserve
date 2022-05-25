@extends('layouts.app')
@section('content')

<div class="container">
    <div class="airplane_create_title">
        <h1>飛行機作成</h1>
    </div>     
    <form action="" method="post">
        @csrf
             <table class="createform">
               <tr>
                   <th>日付</th>
                   <td><input type="date" class="table_form2" name="date" placeholder=""></td>
               </tr>
                <tr>
                    <th>出発時間</th>
                    <td><input type="time" class="table_form2" name="departure_time" placeholder=""></td>
                </tr>
                <tr>
                    <th>到着時間</th>
                    <td><input type="time" class="table_form2" name="arrival_time" placeholder=""></td>
                </tr>
                <tr>
                    <th>出発地</th>
                    <td><input type="text" class="table_form"  name="departure" placeholder="出発地"></td>
                </tr>
                <tr>
                    <th>到着地</th>
                    <td><input type="text" class="table_form" name="arrival" placeholder="到着地"></td>
                </tr>       
             </table>         
                <button type="submit" class="create_btn">次へ</button>
         </form>                     
</div>
@endsection
