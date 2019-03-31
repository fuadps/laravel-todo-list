@extends('layouts.main')

@section('title',$task->name)

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 mt-3">
            <table class="table">
                <tr>
                    <th>Task</th>
                    <td><p>{{ $task->name }}</p></td>
                </tr>
                <tr>
                    <th>Created at</th>
                    <td><p>{{ $task->created_at }}</p></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><p>{{ $task->description }}</p></td>
                </tr>
                <tr>
                    <th>Due Date</th>
                    <td><p>{{ $task->due_date }}</p></td>
                </tr>
            </table>
            <a href=" {{route('task.edit',$task->id)}} " class="btn btn-block btn-primary">Edit</a>
            {!! Form::open(['route' => ['task.destroy' , $task->id] ,'method' => 'DELETE']) !!}
                <button type="submit" class="btn btn-block btn-danger mt-2">Delete</button>
            {!! Form::close() !!}

            </div>
    </div>
    
@endsection