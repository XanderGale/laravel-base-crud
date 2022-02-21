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
                <input type="text" class="form-control" id="title" name='title' value='{{ old('title') ? old('title') : $comic->title }}'>
            </div>

            <div class="form-group mb-3">
                <label for="description">Descrizione:</label>
                <textarea type="text" class="form-control" id="description" name='description' cols="30" rows="5">{{ old('description') ? old('description') : $comic->description }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="thumb">Immagine:</label>
                <input type="text" class="form-control" id="thumb" name='thumb' value='{{ old('thumb') ? old('thumb') : $comic->thumb }}'>
            </div>

            <div class="form-group mb-3">
                <label for="price">Prezzo:</label>
                <input type="text" class="form-control" id="price" name='price' value='{{ old('price') ? old('price') : $comic->price }}'>
            </div>

            <div class="form-group mb-3">
                <label for="series">Serie:</label>
                <input type="text" class="form-control" id="series" name='series' value='{{ old('series') ? old('series') : $comic->series }}'>
            </div>

            <div class="form-group mb-3">
                <label for="type">Genere:</label>
                <input type="text" class="form-control" id="type" name='type' value='{{ old('type') ? old('type') : $comic->type }}'>
            </div>

            <div class="form-group mb-3">
                <label for="sale_date">Data:</label>
                <input type="date" class="form-control" id="sale_date" name='sale_date' value='{{ old('sale_date') ? old('sale_date') : $comic->sale_date }}'>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('comics.index') }}" class="btn btn-secondary">Cancel Edit</a>
            
            {{-- Delete form --}}
            
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post" style="width: 100%;">
                @csrf
                @method('DELETE')
                <button style="margin-left: auto;" onclick="return confirm('Sicuro di cancellare definitivamente l\'articolo?')" class="btn btn-danger">Delete</button>
            </form>
        </form>

    </div>

@endsection