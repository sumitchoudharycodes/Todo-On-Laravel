@extends('layout')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('todos.save', ['id' => $todo->id])}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="todo" class="form-contro form-lg" value="{{ $todo->todo }}">
            </form>
        </div>
    </div>

    <hr>
@stop