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
        <div class="col-md-12">
            <h3>タスクID</h3>
            <p>{{ $tasklist->id }}</p>
            <h3>タイトル</h3>
            <p>{{ $tasklist->content }}</p>
            <h3>登録日時</h3>
            <p>{{ $tasklist->created_at }}</p>
            <h3>更新日時</h3>
            <p>{{ $tasklist->updated_at }}</p>
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
