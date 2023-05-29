@extends('layouts.general')



@section('content')
    <main class="d-flex">
        <div class="section">
            <img src="{{ $comic->thumb }}" alt="">
        </div>
        <div class="section-2">
            <h3>Titolo {{ $comic->title }}</h3>
            <p>Prezzo: {{ $comic->price }}</p>
            <p>Serie: {{ $comic->series }}</p>
            <p>Tipo: {{ $comic->type }}</p>
            <p>Data di uscita: {{ $comic->sale_date }}</p>
            <p>Descrizione: {{ $comic->description }}</p>
        </div>
    </main>
@endsection
