@extends('layouts.general')



@section('content')
    <main class="d-flex flex-wrap gap-3 container">
        @foreach ($comics as $comic)
            <div class="card text-center mt-5">
                <img class="img-w" src="{{ $comic->thumb }}" alt="">
                <div class="card-body">
                    <h2 class="py-4"><a class="link" href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->title }}</a></h2>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button btn btn-danger mt-3" data-item-title="{{ $comic->title }}" >Cancella</button>
                    </form>
                </div>
            </div>
        @endforeach
    </main>
@endsection
