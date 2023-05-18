@extends('layouts.app')

@section('page-title')
    Aggiungi un fumetto:
@endsection

@section('content')
    <form method="POST" action="{{ route('comics.store') }}" class="mb-3">

        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine:</label>
            <input type="url" placeholder="http://..." class="form-control @error('thumb') is-invalid @enderror"
                id="thumb" name="thumb" value="{{ old('thumb') }}">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" placeholder="testo" class="form-control @error('title') is-invalid @enderror"
                id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" placeholder="testo" class="form-control @error('description') is-invalid @enderror"
                id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" placeholder="10.00" class="form-control @error('price') is-invalid @enderror"
                id="price" name="price" value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie:</label>
            <input type="text" placeholder="testo" class="form-control @error('series') is-invalid @enderror"
                id="series" name="series" value="{{ old('series') }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita:</label>
            <input type="date" placeholder="2023-05-16" class="form-control @error('sale_date') is-invalid @enderror"
                id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo:</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                value="{{ old('type') }}">
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-success me-3">Salva</button>
            <button type="reset" class="btn btn-danger me-3">Reset</button>
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Torna alla lista</a>
        </div>

    </form>
@endsection
