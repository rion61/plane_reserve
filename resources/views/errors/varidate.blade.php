@if (count($errors) > 0)
<!-- フォームのエラーリスト -->
<div class="alert alert-danger">
    <strong>下記の項目を記載してください</strong>
    <br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif