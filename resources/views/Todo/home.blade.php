<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    
</head>
    <body>
        <form action="/todo/register" method="post">
            <!--actionで指定して右記を見に行く　Route::get('/tweets', 'TweetController@index');-->
                {!! csrf_field() !!}
            <div class="a">
                <div class="wrap">
                    <p id="headline">タスク登録</p>
                    <label for="name1">タイトル</label>
                        <input type="text" name="body" class="form-control" placeholder="タスクタイトルを入力してください。"/>
                    <label for="name1">内容</label>
                        <textarea class="form-control" id="taskdetail" name="comment" placeholder="タスク内容を入力してください。"></textarea>
                    <label for="name1">期限</label>
                        <input type="date" class="form-control">
                </div>
                <div class="b">
                    <button type="submit" class="form-btn">登録</button>
                    <input type="reset" class="form-btn" value="リセット">
                </div>
            </div>
        </form>
    </body>
</html>
