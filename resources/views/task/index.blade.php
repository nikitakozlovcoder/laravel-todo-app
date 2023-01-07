@extends('layout')

@section('content')
    <a href="{{route('tasks.create')}}">New</a>
    @foreach ($tasks as $task)
        <p>Title: {{ $task->title }}</p>
        <a href="{{route('tasks.show', ['task' => $task->id])}}">Link</a>
        <hr>
    @endforeach
@endsection