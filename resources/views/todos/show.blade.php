@extends('layouts.app')
@section('title')
    Single Todo: {{$todo->name}}
@endsection
@section('content')
<h1 class="text-center my-5">
    {{ $todo->name }}
</h1>
<div class="row justify-content-center">
    <div class="card card-default">
        <div class="card-header">
            Details
        </div>
        <div class="card-body">
            {{$todo->description}}
        </div>
        <br>
    </div>
</div>
<a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-sm my-2">Edit</a>
<a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm my-2">Delete</a>

@endsection