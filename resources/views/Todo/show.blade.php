<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <div class="page-header">
        <h1>タスク詳細</h1>
    </div>
        <div class="tasklists">
                <dt>タスクID</dt>
                <dd>{{ $tasklist->id }}</dd>
                
                <dt>タイトル</dt>
                <dd>{{ $tasklist->content }}</dd>

                <dt>登録日時</dt>
                <dd>{{ $tasklist->created_at }}</dd>

                <dt>更新日時</dt>
                <dd>{{ $tasklist->updated_at }}</dd>
            <dl>
        </div>
    <a href="/tasklist/{{ $tasklist->id }}/edit" class="btn btn-primary">更新</a>
    <form action="/tasklist/{{ $tasklist->id }}" method="post">
        <input type="hidden" name="_method" value="DELETE">
        {!! csrf_field() !!}
        <button type="submit" class="btn btn-danger">削除</button>
    </form>
</body>
</html>
