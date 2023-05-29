@extends('layouts.general')



@section('content')
    <main class="d-flex flex-wrap gap-3 container">
        @foreach ($comics as $comic)
            <div class="card text-center mt-5">
                <img class="img-w" src="{{ $comic->thumb }}" alt="">
                <div class="card-body">
                    <h2 class="py-4"><a class="link" href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->title }}</a></h2>
                </div>
            </div>
        @endforeach
    </main>
@endsection
