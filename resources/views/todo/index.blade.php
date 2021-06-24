@extends('master')

@section('content')
    <div class="container center">
        <div>
            <p>list of todos</p>
            <a href="{{ route('todo.add')}}">Add new post</a>
        </div>

        <x-alert/>

        @if($todos->count()>0)
        <table class="striped mt-5" center>
         <thead>
         <tr>
             <th>Todos</th>
             <th>Action</th>
         </tr>
         </thead>
            <tbody>
            @foreach($todos as $todo)
                <tr>
                    <td>{{ $todo->post }}</td>
                    <td>
                        <a href="{{route('todo.update',$todo->id)}}"><span class="material-icons">edit</span></a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('todo-delete-{{$todo->id}}').submit()"><span class="material-icons">delete</span></a>
                    </td>
                </tr>
                <form action="{{route('todo.delete',$todo->id)}}" id="todo-delete-{{$todo->id}}" method="post">
                    @csrf
                    @method('put')
                </form>
            @endforeach
            </tbody>
        </table>
        @else
            <div>
                <p>No task to show!... Please add one first...</p>
            </div>
        @endif
    </div>
@endsection
