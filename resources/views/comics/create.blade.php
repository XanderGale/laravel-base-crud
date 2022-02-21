@extends('layouts.app')

@section('page_title')
Aggiungi Comic
@endsection

@section('main_content')
    <div class="container">
    
        <h1>Aggiungi un nuovo elemento:</h1>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="form-group mb-3">
                <label for="title">Titolo:</label>
                <input type="text" class="form-control" id="title" name='title' placeholder="Inserisci titolo">
            </div>

            <div class="form-group mb-3">
                <label for="description">Descrizione:</label>
                <textarea type="text" class="form-control" id="description" name='description' placeholder="Inserisci la descrizione" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="thumb">Immagine:</label>
                <input type="text" class="form-control" id="thumb" name='thumb' placeholder="Inserisci link immagine">
            </div>

            <div class="form-group mb-3">
                <label for="price">Prezzo:</label>
                <input type="text" class="form-control" id="price" name='price' placeholder="Inserisci prezzo">
            </div>

            <div class="form-group mb-3">
                <label for="series">Serie:</label>
                <input type="text" class="form-control" id="series" name='series' placeholder="Inserisci serie">
            </div>

            <div class="form-group mb-3">
                <label for="type">Genere:</label>
                <input type="text" class="form-control" id="type" name='type' placeholder="Inserisci genere">
            </div>

            <div class="form-group mb-3">
                <label for="sale_date">Data:</label>
                <input type="date" class="form-control" id="sale_date" name='sale_date' placeholder="Inserisci Data">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection