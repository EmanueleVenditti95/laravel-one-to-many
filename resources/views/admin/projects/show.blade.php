@extends('layouts.app')

@section('content')
    <div class="container">
            @dump($project->type_id)
            <h1>{{ $project->title }}</h1>
            <figure><img src="{{ $project->image }}" alt=""></figure>
            <p>{{ $project->description }}</p>
            <div class="col-auto d-flex">
                <button class="btn btn-warning mt-3"><a class="text-dark text-decoration-none" href="{{ route('projects.edit',$project) }}">modifica</a></button>
                <form action="{{route('projects.destroy',$project)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger mt-3 mx-2" type="submit" value="elimina">
                </form>
            </div>    
    </div>
@endsection