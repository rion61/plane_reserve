@extends('layouts.app')
@section('content')

  <div class="table-title">
        <h1>予約者一覧</h1>
    </div>            
    <div class="tab-wrap">
    <input id="TAB-01" type="radio" name="TAB" class="tab-switch" checked="checked" /><label class="tab-label" for="TAB-01">ボタン 1</label>
    <div class="tab-content">
        コンテンツ 1
    </div>
    <input id="TAB-02" type="radio" name="TAB" class="tab-switch" /><label class="tab-label" for="TAB-02">ボタン 2</label>
    <div class="tab-content">
        コンテンツ 2
    </div>
    <input id="TAB-03" type="radio" name="TAB" class="tab-switch" /><label class="tab-label" for="TAB-03">ボタン 3</label>
    <div class="tab-content">
        コンテンツ 3
    </div>
</div>
@endsection