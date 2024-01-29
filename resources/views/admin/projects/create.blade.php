@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        <h2 class="text-center">Aggiungi un nuovo progetto</h2>

        <form class="mt-5" action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-2 has-validation">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-2">
                <label for="description" class="form-label">Descrizione del progetto:</label>
                <textarea class="form-control" id="description" rows="5" name="description">{{ old('description') }}</textarea>
            </div>   
            
            <button class="btn btn-success" type="submit">Salva</button>

        </form>
    </div>
@endsection
