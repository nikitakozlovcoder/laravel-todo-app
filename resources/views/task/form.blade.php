@extends('layout')

@section('content')
    <form 
        action={{$task->id ? route('tasks.update', ['task' => $task->id]) : route('tasks.store')}}
        method="post"
        enctype="multipart/form-data">
        @csrf 
        @method($task->id ? 'put' : 'post')
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <hr>
        @endif
        <p>
            <label for="title">Title</label>
            <input type="text" value="{{old('title', $task->title)}}" name="title" id="title">    
        </p>
        <p>
            <label for="description">Description</label>
            <input type="text" value="{{old('description', $task->description)}}" name="description" id="description">    
        </p>
        <p>
            <label for="images[]">Images</label>
            <br>
            <input name="images[]" id="images[]" type="file" multiple>    
        </p>

        <input type="submit">
    </form>
@endsection