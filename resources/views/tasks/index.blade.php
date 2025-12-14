@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>My Tasks</h2>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add New Task</a>
        </div>

        <div class="card">
            <div class="card-body">
                @if($tasks->count() > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>
                                        @if($task->is_completed)
                                            <span class="badge bg-success">Completed</span>
                                        @else
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @endif
                                    </td>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ Str::limit($task->description, 50) }}</td>
                                    <td>
                                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-info text-white"><i class="bi bi-pencil"></i></a>
                                        
                                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-center text-muted my-5">No tasks found. Start by adding one!</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
