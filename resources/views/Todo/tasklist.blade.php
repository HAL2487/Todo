@extends('layouts.app')

@section('page-title','Todo | タスク一覧')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/tasklist.css') }}">
@endsection

@section('content')
        <h2 id="task_list_title">タスク一覧</h2>
            <table class="task_list_table">
                <tbody>
                    <thead>
                        <tr>
                            <td>タスクID</td>
                            <td>タイトル</td>
                            <td>内容</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    @foreach($tasklist as $task)
                        <tr>
                            <td id="taskid">{{ $task->id }}</td>
                            <td id="title">{{ $task->title }}</td>
                            <td id="taskContent">{{ $task->content }}</td>
                            <td class="text-right"><a href="/tasklist/{{ $task->id }}">詳細</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <a class="new_addition" href="/todo/registration">新規追加</a>
@endsection


