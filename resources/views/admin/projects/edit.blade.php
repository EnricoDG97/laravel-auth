@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>Modifica i dettagli del progetto {{ $project->title }}</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-2 has-validation">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
            </div>

            <div class="mb-2">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="5" name="description">{{ old('description', $project->description) }}</textarea>
            </div>   

            <button type="submit" class="btn btn-success d-inline-block"> 
                <i class="fa-solid fa-pen-to-square"></i>
            </button>
            
        </form>
    </div>
@endsection