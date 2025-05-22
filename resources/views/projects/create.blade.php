create.blade.php & edit.blade.php
Use same form; change method & route dynamically.

blade
Copy code
@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>{{ isset($project) ? 'Edit' : 'Add' }} Project</h2>

    <form method="POST" enctype="multipart/form-data"
          action="{{ isset($project) ? route('projects.update', $project) : route('projects.store') }}">
        @csrf
        @if(isset($project)) @method('PUT') @endif

        <input type="text" name="title" value="{{ $project->title ?? '' }}" class="form-control mb-2" placeholder="Title" required>
        <textarea name="description" class="form-control mb-2" placeholder="Description">{{ $project->description ?? '' }}</textarea>
        <input type="url" name="project_url" value="{{ $project->project_url ?? '' }}" class="form-control mb-2" placeholder="Project URL">
        <input type="file" name="image" class="form-control mb-2" @if(!isset($project)) required @endif>

        <select name="status" class="form-control mb-2" required>
            <option value="draft" @if(isset($project) && $project->status == 'draft') selected @endif>Draft</option>
            <option value="published" @if(isset($project) && $project->status == 'published') selected @endif>Published</option>
        </select>

        <button class="btn btn-success">{{ isset($project) ? 'Update' : 'Create' }}</button>
    </form>
</div>
@endsection