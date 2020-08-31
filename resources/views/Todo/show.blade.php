@extends('layouts.app')

@section('page-title','Todo | タスク詳細')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/taskdetail.css') }}">
@endsection

@section('content')
<div class="container">
        <h1>タスク詳細</h1>
        <hr>
        <div class="task_detail">
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
        <div class="operation_btn">
            <a href="/tasklist/{{ $tasklist->id }}/edit" class="update_btn">更新</a>
            <form action="/tasklist/{{ $tasklist->id }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                 <!--HTMLではGET／POST以外をサポートしていない。"_method"と記述することでDELETEメソッドと解釈される-->
                {!! csrf_field() !!}
                <button type="submit" class="delete_btn">削除</button>
            </form>
        </div>
    </div>
@endsection


