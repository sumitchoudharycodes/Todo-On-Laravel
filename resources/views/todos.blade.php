@extends('layout')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-6 col-lg offset-3">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" name="todo" class="form-contro form-lg" placeholder="Create a new Todo">
            </form>
        </div>
    </div>

    <hr>
    @foreach($todos as $todo)
        {{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id])}}" class="btn btn-danger"> X </a>
        <a href="{{ route('todo.update', ['id' => $todo->id])}}" class="btn btn-info btn-xs"> update </a>
        @if(!$todo->completed)
            <a href="{{ route('todos.completed', ['id' => $todo->id])}}" class="btn btn-success btn-xs"> Mark as Completed </a>
        @else
            <span class="text-success">completed</span>
        @endif
        <hr>
    @endforeach
@stop