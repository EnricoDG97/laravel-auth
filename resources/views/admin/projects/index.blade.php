@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        <h2 class="text-center">Lista Progetti</h2>

        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row"> {{ $project->slug }}</th>
                                <td class="w-50">{{ $project->description }}</td>
                                <td class="w-25">
                                    <a class="btn btn-success d-inline-block" href=""> 
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    <a class="btn btn-warning d-inline-block" href=""> 
                                        <i class="fa-solid fa-pen-to-square"></i>
                                     </a>
                                    <button type="submit" class="btn btn-danger d-inline-block">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
