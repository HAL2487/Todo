<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>タスク編集</h1>
    <hr>
    <form action="/tasklist/{{ $tasklist->id }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        {!! csrf_field() !!}

        <div class="form-group row">
            <label class="col-xs-2 col-form-label">タスク内容</label>
            <div class="col-xs-10">
                <input type="text" name="body" class="form-control" placeholder="タスク内容を入力してください。" value="{{ $tasklist->content }} "/>
            </div>
        </div>

        <div class="form-group row">
            <button type="submit" class="updatebtn">更新</button>
        </div>
    </form>
</div>
</body>
</html>
