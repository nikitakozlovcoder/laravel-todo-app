@extends('layout')

@section('content')
    <form action={{$task->id ? route('tasks.update', ['task' => $task->id]) : route('tasks.store')}} method="post">
        @csrf 
        @method($task->id ? 'put' : 'post')
        <p>
            <label for="title">Title</label>
            <input type="text" value="{{$task->title}}" name="title">    
        </p>
        <p>
            <label for="description">Description</label>
            <input type="text" value="{{$task->description}}" name="description">    
        </p>
        <input type="submit">
    </form>
@endsection