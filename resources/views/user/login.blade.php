@extends('layout')

@section('content')
     <form 
        action={{route('login')}}
        method="post"
        enctype="multipart/form-data">
        @csrf 
        @method('post')
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
            <label for="email">Email</label>
            <input type="text" value="{{old('email')}}" name="email" id="email">    
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">    
        </p>
        <input type="submit">
    </form>
@endsection