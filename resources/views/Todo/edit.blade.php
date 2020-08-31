@extends('layouts.app')

@section('page-title','Todo | タスク編集')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>タスク編集</h1>
    <hr>
    <form action="/tasklist/{{ $tasklist->id }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        {!! csrf_field() !!}
            <div class="task_content">
                <label>タスクタイトル</label>
                <input type="text" name="title" class="form-control" placeholder="タスクタイトルを入力してください。" value="{{ $tasklist->title }} "/>
                <label>タスク内容</label>
                <input type="text" name="content" class="form-control" placeholder="タスク内容を入力してください。" value="{{ $tasklist->content }} "/>
            </div>
        <div class="operation_btn">
            <button type="submit" class="update_btn">更新</button>
        </div>
    </form>
</div>
@endsection