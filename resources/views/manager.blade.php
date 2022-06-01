@extends('layouts.app')
@section('content')

    {{-- @can('system-only') システム管理者権限(roll==1)のみに表示される --}}
    <section >
        <div class="manager-list">
            <div class="manager-nav">
                <a href="{{ url('/member_list') }}">会員一覧</a>
                <a href="{{ url('/reservation_list_planeSelect') }}">予約者一覧（飛行機選択）</a>
                <a href="{{ url('/plane_create') }}">飛行機作成</a>
                <a href="{{ url('/plane_list') }}">飛行機一覧・編集・削除</a>
                <a href="{{ url('/user') }}">登録情報修正</a>
            </div>
            <div class="manager-news">
                <h1>お知らせ</h1>
                <p>新着情報はありません</p>
            </div>
        </div>
    </section>
    {{-- @endcan --}}
@endsection