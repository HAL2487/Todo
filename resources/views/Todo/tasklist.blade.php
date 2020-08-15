<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1 id="tasklisttitle">タスク一覧</h1>
    </div>
    <div class="row">
        <div class="col-md-2">
            <a class="btn new-register" href="/todo/home">新規追加</a>
        </div>
        <div class="tasklist">
            <table class="table">
                <tbody>
                    <thead>
                        <tr>
                        <td>ID</td>
                        <td>タイトル</td>
                        <td>内容</td>
                        <td colspan = 2>Actions</td>
                        </tr>
                    </thead>
                @foreach($tasklist as $tasklist)
                    <tr>
                        <td id="taskid">{{ $tasklist -> id }}</td>
                        <td id="title">{{ $tasklist -> title }}</td>
                        <td id="title">{{ $tasklist -> updated_at }}</td>
                        <td class="text-right"><a href="">詳細</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
