@extends('layouts.app')
@section('content')

<div class="container">
<div class="create_check_title">
        <h1>この情報で飛行機を作成しますか？</h1>
    </div>   
    <form action="" method="post">
        @csrf
             <table class="create_check_form">
               <tr>
                   <th>日付</th>
                   <td>$plane->date<input type="hidden" name="date" value="$plane->date"></td>
               </tr>
                <tr>
                    <th>出発時間</th>
                    <td>$plane->departure_time<input type="hidden" name="departure_time" value=""></td>
                </tr>
                <tr>
                    <th>到着時間</th>
                    <td>$plane->arrival_time<input type="hidden" name="arrival_time" value=""></td>
                </tr>
                <tr>
                    <th>出発地</th>
                    <td>$plane->departure<input type="hidden" name="departure"  value=""></td>
                </tr>
                <tr>
                    <th>到着地</th>
                    <td>$plane->arrival<input type="hidden" name="arrival"  value=""></td>
                </tr>       
             </table>         
                <button type="submit" class="create_btn">作成</button>
         </form>  
</div>

@endsection