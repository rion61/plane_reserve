@extends('layouts.app')
@section('content')

<section>
    <div class="common-container">
        {{-- メニューバー --}}
        <a class="manager-link" href="/manager">管理者トップ画面に戻る</a>
        {{-- 会員一覧 --}}
        <div class="main-title">
            <h1>会員一覧</h1>
        </div>
        {{-- 検索機能 --}}
        <div class="search-form">
            <form method="GET" action="/memberSearch" class="d-flex">
                <input class="searchForm form-control me-2" type="search" placeholder="名前,メールアドレス,電話番号で検索" aria-label="Search"name="search" value="@if (isset($search)) {{ $search }} @endif">
                <button class="searchBtn btn btn-outline-success" type="submit">検索</button>
                <button class="clearBtn btn " type="submit"><a href="{{ route('member_list') }}">クリア</a></button>
            </form>
        </div>
        {{-- 会員リスト --}}
        <table class="table table-striped plane_table">
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>電話番号</th>
                <th>入会日</th>
            </tr>
            @foreach($user as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->tel}}</td>
                <td>{{$value->created_at->format('Y-m-d')}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection