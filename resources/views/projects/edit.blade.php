@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Edit Project</h2>

    <form method="POST" enctype="multipart/form-data" action="{{ route('projects.update', $project) }}">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ old('title', $project->title) }}" class="form-control mb-2" placeholder="Title" required>
        <textarea name="description" class="form-control mb-2" placeholder="Description">{{ old('description', $project->description) }}</textarea>
        <input type="url" name="project_url" value="{{ old('project_url', $project->project_url) }}" class="form-control mb-2" placeholder="Project URL">
        <input type="file" name="image" class="form-control mb-2">

        <select name="status" class="form-control mb-2" required>
            <option value="draft" @if($project->status === 'draft') selected @endif>Draft</option>
            <option value="published" @if($project->status === 'published') selected @endif>Published</option>
        </select>

        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
