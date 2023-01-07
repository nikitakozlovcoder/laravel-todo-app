@extends('layout')

@section('content')
    <h2>{{$task->title}}</h2>
    <hr>
    <p>{{$task->description}}</p>
    <a href="{{route('tasks.edit', ['task' => $task->id])}}">Edit</a>

     <form method="POST" action="{{route('tasks.destroy', ['task' => $task->id])}}">
        @csrf
        @method('delete')
        <input type="submit" value="Delete"> 
    </form>

@endsection