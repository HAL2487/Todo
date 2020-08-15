<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
</head>
    <body>
        <form action="/todo/register" method="post">
            <!--actionで指定して右記を見に行く　Route::get('/tweets', 'TweetController@index');-->
                {!! csrf_field() !!}
            <div class="form-group row">
                <label class="col-xs-2 col-form-label">TaskTitle</label>
                <div class="col-xs-10">
                    <input type="text" name="body" class="form-control" placeholder="Task内容を入力してください。"/>
                    <input type="text" id="datepicker">
                    <div id="outarea_aa">outarea_aa</div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </div>
        </form>
        <script src="{{ asset('/js/test.js') }}"></script>
    </body>
</html>
