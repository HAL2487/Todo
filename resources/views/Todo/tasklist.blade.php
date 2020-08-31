<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('/css/tasklist.css') }}">
</head>
<body>
    <div class="container">
        <h1 id="task_list_title">タスク一覧</h1>
        <table class="task_list_table">
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
        <a class="new_addition" href="/todo/registration">新規追加</a>
    </div>
</body>
</html>
