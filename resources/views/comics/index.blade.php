@extends('layouts.app')

@section('page_title')
Lista Fumetti
@endsection

@section('main_content')

    <h1>Lista Fumetti:</h1>

    <div class="d-flex flex-wrap">
    @foreach ($comics as $comic)

    <div class="card" style="width: 18rem; min-height: 600px; margin: 15px;">
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}'s image">
        <div class="card-body">
          <h5 class="card-title">{{ $comic->title }}</h5>
          <p class="card-text">{{ $comic->type }}</p>
          <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">More details</a>
        </div>
    </div>

    @endforeach
    </div>

@endsection