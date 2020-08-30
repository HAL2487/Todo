<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="{{ asset('/css/taskliststyle.css') }}">
</head>
<body>
    <div class="container">
        <h1 id="tasklisttitle">タスク一覧</h1>
        <table class="table">
            <tbody>
                <thead>
                    <tr>
                        <td>タスクID</td>
                        <td>タイトル</td>
                        <td>内容</td>
                        <td colspan = 2>Actions</td>
                    </tr>
                </thead>
                @foreach($tasklist as $tasklist)
                    <tr>
                        <td id="taskid">{{ $tasklist -> id }}</td>
                        <td id="title">{{ $tasklist -> title }}</td>
                        <td id="taskContent">{{ $tasklist -> content }}</td>
                        <td class="text-right"><a href="/tasklist/{{ $tasklist-> id }}">詳細</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="newregister" href="/todo/home">新規追加</a>
    </div>
</body>
</html>
