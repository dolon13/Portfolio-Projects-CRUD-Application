@extends('layout')

@section('content')
<div class="container mt-4">
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Add Project</a>
    @foreach ($projects as $project)
        <div class="card mb-2">
            <div class="card-body">
                <h4>{{ $project->title }} ({{ $project->status }})</h4>
                <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-info">View</a>
                <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-warning">Edit</a>
                <form method="POST" action="{{ route('projects.destroy', $project) }}" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
