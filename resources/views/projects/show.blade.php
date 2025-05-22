@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>{{ $project->title }}</h2>
    <img src="{{ asset('storage/' . $project->image) }}" width="300">
    <p>{{ $project->description }}</p>
    @if($project->project_url)
        <p><a href="{{ $project->project_url }}" target="_blank">Visit Project</a></p>
    @endif
    <p>Status: {{ $project->status }}</p>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
