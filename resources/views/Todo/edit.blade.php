<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>タスク編集</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="/todo/register" method="post">
                {!! csrf_field() !!}

                <div class="form-group row">
                    <label class="col-xs-2 col-form-label">タスク内容</label>
                    <div class="col-xs-10">
                        <input type="text" name="body" class="form-control" placeholder="タスク内容を入力してください。" value="{{ $tasklist->content }} "/>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-xs-offset-2 col-xs-10">
                        <button type="submit" class="btn btn-primary">投稿する</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
