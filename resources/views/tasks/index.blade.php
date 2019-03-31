@extends('layouts.main')

@section('title','Task Home')

@section('content')

<div class="row justify-content-center mb-3">
    <div class="col-sm-4">
        <a href=" {{ route('task.create') }} " class="btn btn-block btn-success">Create Task</a>
    </div>
</div>
    @if ($tasks->count() == 0)
        <p class="lead text-center">Currently no task available right now.<br>Create new task right now!</p>

    @else
        @foreach ($tasks as $task)
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <h3>
                        <a href=" {{ route('task.show', $task->id) }} "> {{ $task->name }}</a>
                        <small> {{$task->created_at}} </small>
                    </h3>
                    <p> {{$task->description}} </p>
                    <h5> Due Date : <small>{{$task->due_date}}</small></h5>
                    {!! Form::open(['route' => ['task.destroy' , $task->id] ,'method' => 'DELETE']) !!}
                        <a href=" {{route('task.edit',$task->id)}} " class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </div>
            </div>
            <hr>
        @endforeach
    @endif
    

    <div class="row justify-content-center">
        <div class="col-sm-6 text-center">
            {{ $tasks->links() }}
        </div>
    </div>
    
@endsection