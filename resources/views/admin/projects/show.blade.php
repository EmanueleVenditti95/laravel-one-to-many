@extends('layouts.app')

@section('content')
    <div class="container">
            <h1>{{ $project->title }}</h1>
            <figure><img src="{{ $project->image }}" alt=""></figure>
            <p>{{ $project->description }}</p>
            <button class="btn btn-warning"><a href="{{ route('projects.edit',$project) }}">modifica</a></button>
            <form action="{{route('projects.destroy',$project)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="elimina">
            </form>
    </div>
@endsection