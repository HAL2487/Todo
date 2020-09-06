@extends('layouts.app')

@section('page-title','Todo | タスク登録')

@section('css')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('content')
<form action="/todo/register" method="post">
    <!--actionで指定して右記を見に行く　Route::get('/todo/register', 'TaskController@register');-->
    {!! csrf_field() !!}
    <!--LaravelはデフォルトでCSRF対策を行っている。フォームにCSRFトークンを埋め込むことで自サイト以外からのリクエストを弾く仕組みになっている-->
    <div class="container">
        <div class="error_messagearea">
            @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                <!--$errorsは特別なフラッシュデータ(1回限りのセッション変数)でエラーメッセージが入り自動的にviewに渡される -->
            </ul>
            @endif
        </div>
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
        </div>
    </div>
</form>
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
<script type="text/javascript">
flatpickr(document.getElementById('due_date'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    minDate: new Date()
});

//必須項目が入力されていない場合に登録ボタンを無効化し、入力された場合のみ有効とする

function  changeButton(){
    $(function() {
    //登録ボタンとリセットボタンを無効化してボタン色を変更
        $('.registration_btn,.reset_button').prop("disabled", true);
    });
    $('.registration_btn,.reset_button').css({
    'background':'#d6e0f0'
    });
}

$('.form-control').change(function () {
    let regist_flag = true;
    let reset_flag = true;
    //必須項目が空かどうかをチェック
    $('.form-control').each(function(e) {
        if ($('.form-control').eq(e).val() === "") {
            regist_flag = false;
            reset_flag = false;
        }
    });

    //全て埋まっていたら
    if (regist_flag) {
        //登録ボタンを復活
        $('.registration_btn').prop("disabled", false);
        $('.registration_btn').css({
            'background':'#197163'
        });
    }
    else {
        //登録ボタンを閉じる
        $('.registration_btn').prop("disabled", true);
        $('.registration_btn').css({
            'background':'#d6e0f0'
        });
    }

    if (reset_flag) {
        //登録ボタンを復活
        $('.reset_button').prop("disabled", false);
        $('.reset_button').css({
            'background':'#197163'
        });
    }
    else {
        //登録ボタンを閉じる
        $('.reset_button').prop("disabled", true);
        $('.reset_button').css({
            'background':'#d6e0f0'
        });
    }
 });

 $('.reset_button').on('click', function(){
    changeButton();
 });
</script>


@endsection
   

