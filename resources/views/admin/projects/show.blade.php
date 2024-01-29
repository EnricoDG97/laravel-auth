@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>{{ $project->title }}</h2>

        <div class="mt-4">
            Slug: {{ $project->slug }}
        </div>

        <p class="mt-4">
            {{ $project->description }}
        </p>

        <div>
            <a class="btn btn-warning d-inline-block" href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}"> 
                <i class="fa-solid fa-pen-to-square"></i>
             </a>

            <button type="submit" class="btn btn-danger d-inline-block">
                <i class="fa-solid fa-trash-can"></i>
            </button>

        </div>
    </div>

    
@endsection