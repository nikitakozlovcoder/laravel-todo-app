@extends('layout')

@section('content')
    <h2>{{$task->title}}</h2>
    <hr>
    <p>{{$task->description}}</p>
    @foreach ($task->files as $file)
        <div>
          <img src={{Storage::url($file->path)}} alt="#">
        </div>
    @endforeach
   
    <a href="{{route('tasks.edit', ['task' => $task->id])}}">Edit</a>
    <form method="POST" action="{{route('tasks.destroy', ['task' => $task->id])}}">
        @csrf
        @method('delete')
        <input type="submit" value="Delete"> 
    </form>
@endsection