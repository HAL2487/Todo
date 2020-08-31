@extends('layouts.app')

@section('page-title','Todo | タスク登録')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('content')

@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        <!--$errorsは特別なフラッシュデータ(1回限りのセッション変数)でエラーメッセージが入り自動的にviewmに渡される -->
    </ul>
@endif

<form action="/todo/register" method="post">
    <!--actionで指定して右記を見に行く　Route::get('/todo/register', 'TaskController@register');-->
    {!! csrf_field() !!}
    <!--LaravelはデフォルトでCSRF対策を行っている。フォームにCSRFトークンを埋め込むことで自サイト以外からのリクエストを弾く仕組みになっている-->
    <div class="container">
        <div class="wrap">
            <h1>タスク登録</h1>
            <hr>
            <label for="title">タイトル</label>
                <input type="text" name="title" class="form-control" placeholder="タスクタイトルを入力してください。" value="{{ old('title')}}"/>
                 <!--'_old_input'も特別なフラッシュデータでoldメソッドによって直前の画面入力パラメータを取り出せる -->
            <label for="content">内容</label>
                <textarea class="form-control" id="content" name="content" placeholder="タスク内容を入力してください。" value="{{ old('content')}}"></textarea>
            <label for="due_date">期限</label>
                <input type="text" name="due_date" id ="due_date" class="form-control" value="{{ old('due_date')}}">
        </div>
        <div class="operation_btn">
            <button type="submit" class="registration_btn">登録</button>
            <input type="reset" class="reset_button" value="リセット">
            <a href="/tasklist" class="task_list_btn">タスク一覧</a>
        </div>
    </div>
</form>
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
<script>
flatpickr(document.getElementById('due_date'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    minDate: new Date()
});
</script>
@endsection
   

