@extends('layouts.app')

@section('page-title')
    Modifica un fumetto:
@endsection

@section('content')
    <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}" class="mb-3">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine:</label>
            <input type="url" placeholder="http://..." class="form-control" id="thumb" name="thumb"
                value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" placeholder="testo" class="form-control" id="title" name="title"
                value="{{ $comic->title }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" placeholder="testo" class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" placeholder="10.00" class="form-control" id="price" name="price"
                value="{{ $comic->price }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie:</label>
            <input type="text" placeholder="testo" class="form-control" id="series" name="series"
                value="{{ $comic->series }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita:</label>
            <input type="date" placeholder="2023-05-16" class="form-control" id="sale_date" name="sale_date"
                value="{{ $comic->sale_date }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-success me-3">Salva</button>
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Torna alla lista</a>
        </div>

    </form>
@endsection
