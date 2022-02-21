@extends('layouts.app')

@section('page_title')
Modifica Comic
@endsection

@section('main_content')
    <div class="container">
    
        <h1>Modifica un elemento esistente:</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="title">Titolo:</label>
                <input type="text" class="form-control" id="title" name='title' value='{{ $comic->title }}'>
            </div>

            <div class="form-group mb-3">
                <label for="description">Descrizione:</label>
                <textarea type="text" class="form-control" id="description" name='description' cols="30" rows="5">{{ $comic->description }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="thumb">Immagine:</label>
                <input type="text" class="form-control" id="thumb" name='thumb' value='{{ $comic->thumb }}'>
            </div>

            <div class="form-group mb-3">
                <label for="price">Prezzo:</label>
                <input type="text" class="form-control" id="price" name='price' value='{{ $comic->price }}'>
            </div>

            <div class="form-group mb-3">
                <label for="series">Serie:</label>
                <input type="text" class="form-control" id="series" name='series' value='{{ $comic->series }}'>
            </div>

            <div class="form-group mb-3">
                <label for="type">Genere:</label>
                <input type="text" class="form-control" id="type" name='type' value='{{ $comic->type }}'>
            </div>

            <div class="form-group mb-3">
                <label for="sale_date">Data:</label>
                <input type="date" class="form-control" id="sale_date" name='sale_date' value='{{ $comic->sale_date }}'>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection