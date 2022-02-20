@extends('layouts.app')

@section('page_title')
Lista Fumetti
@endsection

@section('main_content')

    <h1>Lista Fumetti:</h1>

    @foreach ($comics as $comic)
    <div style="margin: 30px">
        <h2>{{ $comic->title }}</h2>
        <p>{{ $comic->description }}</p>
    </div>
    @endforeach

@endsection