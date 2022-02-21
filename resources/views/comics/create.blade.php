@extends('layouts.app')

@section('page_title')
Aggiungi Comic
@endsection

@section('main_content')
    
        <h1>Aggiungi un nuovo elemento:</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="form-group mb-3">
                <label for="title">Titolo:</label>
                <input type="text" class="form-control" id="title" name='title' value="{{ old('title') }}" placeholder="Inserisci titolo">
            </div>

            <div class="form-group mb-3">
                <label for="description">Descrizione:</label>
                <textarea type="text" class="form-control" id="description" name='description' placeholder="Inserisci la descrizione" cols="30" rows="5">{{ old('description') }} </textarea>
            </div>

            <div class="form-group mb-3">
                <label for="thumb">Immagine:</label>
                <input type="text" class="form-control" id="thumb" name='thumb' value="{{ old('thumb') }}" placeholder="Inserisci link immagine">
            </div>

            <div class="form-group mb-3">
                <label for="price">Prezzo:</label>
                <input type="text" class="form-control" id="price" name='price' value="{{ old('price') }}" placeholder="Inserisci prezzo">
            </div>

            <div class="form-group mb-3">
                <label for="series">Serie:</label>
                <input type="text" class="form-control" id="series" name='series' value="{{ old('series') }}" placeholder="Inserisci serie">
            </div>

            <div class="form-group mb-3">
                <label for="type">Genere:</label>
                <input type="text" class="form-control" id="type" name='type' value="{{ old('type') }}" placeholder="Inserisci genere">
            </div>

            <div class="form-group mb-3">
                <label for="sale_date">Data:</label>
                <input type="date" class="form-control" id="sale_date" name='sale_date'>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection