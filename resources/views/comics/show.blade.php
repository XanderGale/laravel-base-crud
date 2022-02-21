@extends('layouts.app')

@section('page_title')
Dettagli Comic
@endsection

@section('main_content')

        <div class="card">
            <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}'s image">
            <div class="card-body">
              <h5 class="card-title">{{ $comic->title }}</h5>
              <p class="card-text">{{ $comic->description }}</p>
              <a href="{{ route('comics.index') }}" class="btn btn-primary">Go Back</a>
              <a href="{{ route('comics.edit', ['comic' => $comic->id ]) }}" class="btn btn-secondary">Edit</a>
            </div>
        </div>
    
@endsection