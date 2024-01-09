@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica il progetto</h1>

        <form action="{{route('projects.update',$project)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci titolo" value="{{$project->title}}">
            </div>
            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="url" class="form-control" name="image" id="image" placeholder="URL immagine" value="{{$project->image}}">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Descrizione" value="{{$project->description}}">
            </div>
            <div class="col-auto d-flex">
                <input type="submit" class="btn btn-warning mt-3 mx-2" value="modifica">
                <form action="{{route('projects.destroy',$project)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger mt-3" type="submit" value="elimina">
                </form>
            </div>    
        </form>
    </div>    
@endsection