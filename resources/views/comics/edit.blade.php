@extends('layouts.general')


@section('content')
<main>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-6">
                    <label for="title" class="form-label">Edit Title</label>
                    <input required name="title" value="{{ $comic->title }}" type="text" class="form-control" id="title">
                </div>
                <div class="col-6">
                    <label for="thumb" class="form-label">Edit Image url</label>
                    <input required name="thumb" value="{{ $comic->thumb }}" type="text" class="form-control" id="thumb">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="type" class="form-label">Edit Type</label>
                    <input required name="type" value="{{ $comic->type }}" type="text" class="form-control" id="type">
                </div>
                <div class="col-6">
                    <label for="sale_date" class="form-label">Edit Sale date</label>
                    <input required name="sale_date" value="{{ $comic->sale_date }}" type="date" class="form-control" id="sale_date">
                </div>
            </div>
            <div class="row mb-3 ">
                <div class="col-6">
                    <label for="series" class="form-label text-center">Edit Series</label>
                    <input name="series" required name="series" value="{{ $comic->series }}" type="text"class="form-control"
                        id="series"></textarea>
                </div>
                <div class="col-6 ">
                    <label for="price" class="form-label text-center">Edit Price</label>
                    <input name="price" required name="price" value="{{ $comic->price }}" type="number" min="0.01" max="90000" step="0.01"
                        class="form-control" id="price">
                </div>
            </div>
            <div class="row mb-3 ">
                <label for="description">Edit Description</label>
                <textarea name="description"  id="description" cols="30" rows="10">
                    {{ $comic->description }}"
                </textarea>
            </div>
            <div class="d-flex justify-content-center mb-3 gap-3">
                <button type="submit" class="btn btn-primary">Edit comic</button>
                <button type="reset" class="btn btn-secondary">Reset form</button>
    </form>
</main>
@endsection
