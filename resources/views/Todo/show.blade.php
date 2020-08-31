<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('/css/taskdetail.css') }}">
</head>
<body>
    <div class="container">
            <h1>タスク詳細</h1>
        <hr>
            <div class="task_detail">
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
        <div class="operation_btn">
            <a href="/tasklist/{{ $tasklist->id }}/edit" class="update_btn">更新</a>
            <form action="/tasklist/{{ $tasklist->id }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                {!! csrf_field() !!}
                <button type="submit" class="delete_btn">削除</button>
            </form>
</div>
    </div>
</body>
</html>
