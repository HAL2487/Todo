<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Twitter風アプリ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>タスク詳細</h1>
    </div>
    <div class="row">
        <div class="tasklists">
            <dl>
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
    </div>
    <a href="" class="btn btn-primary">更新</a>
    <form action="" method="post">
        <input type="hidden" name="_method" value="DELETE">
        {!! csrf_field() !!}
        <button type="submit" class="btn btn-danger">削除</button>
    </form>
</div>
</body>
</html>
