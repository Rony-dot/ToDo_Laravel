@extends('master')
@section('content')
    <div class="container center">
        <p>this is add page</p>
        <form method="post" action="{{route('todo.store')}}" >

            @csrf
            <x-alert/>
            <p>what is your post?</p>
            <input type="text" name="post" id="post"/>
            <button type="submit" class="btn">Post </button>
            <a href="{{route('todo.index')}}" class="btn ">Back</a>
        </form>
    </div>

@endsection
