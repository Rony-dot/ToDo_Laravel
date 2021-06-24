@extends('master')
@section('content')
    <div class="container center">
        <p>this is update page</p>
        <form method="post" action="{{ route('todo.updates', $todo->id) }}">
            @method('patch')
            @csrf
            <x-alert/>
            <p>update your post here...</p>
            <input type="text" name="post" id="post" value="{{ $todo->post }}"/>
            <button type="submit" class="btn">Update </button>
            <a href="{{route('todo.index')}}" class="btn ">Back</a>
        </form>
    </div>
@endsection
