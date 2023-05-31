@extends('layouts.general')


@section('content')
<main>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-6">
                    <label for="title" class="form-label">Title</label>
                    <input required name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required min="3" maxlength="255" id="title" aria-describedby="titleHelp">
                    <div id="titleHelp" class="form-text">Inserisci un titolo - required - minimo 3 caratteri massimo 255
                        caratteri</div>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="thumb" class="form-label" value="{{ old('thumb') }}">Image url</label>
                    <input required name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror" required maxlength="255" id="thumb" aria-describedby="thumbHelp">
                    <div id="thumbHelp" class="form-text">Inserisci un URL con 255 caratteri massimo.
                        caratteri</div>
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="type" class="form-label">Type</label>
                    <input required name="type" type="text" class="form-control" id="type">
                </div>
                <div class="col-6">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input required name="sale_date" type="date" class="form-control" id="sale_date">
                </div>
            </div>
            <div class="row mb-3 ">
                <div class="col-6">
                    <label for="series" class="form-label text-center">Series</label>
                    <input name="series" required name="series" type="text"class="form-control"
                        id="series"></textarea>
                </div>
                <div class="col-6 ">
                    <label for="price" class="form-label text-center">Price</label>
                    <input name="price" required name="price" type="number" min="0.01" max="90000" step="0.01"
                        class="form-control" id="price">
                </div>
            </div>
            <div class="row mb-3 ">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" value="{{ old('description') }}" cols="30" rows="10"></textarea>
            </div>
            <div class="d-flex justify-content-center mb-3 gap-3">
                <button type="submit" class="btn btn-primary">Add comic</button>
                <button type="reset" class="btn btn-secondary">Reset form</button>
    </form>
</main>
@endsection
