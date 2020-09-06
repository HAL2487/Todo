<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@yield('page-title')</title>
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        @yield('css')
    </head>
    <body>
        <header>
            <h1><i class="fa fa-tasks" aria-hidden="true"></i>Todo</h1>
        </header>
        <div class="mainarea">
            <nav>
                <ul>
                    <li class="check"><a href="/todo/registration">タスク新規登録</a></li>
                    <li class="check"><a href="/tasklist">タスク一覧</a></li>
                    <li class="check"><a href="#" class="off">ユーザー情報</a></li>
                    <li class="check"><a href="#">ログアウト</a></li>
                </ul>
            </nav>
            <main>
            @yield('content')
            </main>
        </div>

        <script type="text/javascript">
//チェック
$(function(){
    $("nav ul li").click(function(){
        if($(this).attr("class")=="check"){
        $(this).removeClass("check").addClass("checked");
        }else{
        $(this).removeClass("checked").addClass("check");}
     });
});
</script>
    </body> 


</html>
