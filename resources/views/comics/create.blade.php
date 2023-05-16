@extends('layouts.app')

@section('page-title')
    Aggiungi un fumetto:
@endsection

@section('content')
    <form method="POST" action="{{ route('comics.store') }}" class="mb-3">

        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine:</label>
            <input type="url" placeholder="http://..." class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" placeholder="testo" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" placeholder="testo" class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" placeholder="10.00" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie:</label>
            <input type="text" placeholder="testo" class="form-control" id="series" name="series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita:</label>
            <input type="date" placeholder="2023-05-16" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo:</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>

        <button type="submit" class="btn btn-success">Salva</button>
        <button type="reset" class="btn btn-danger">Cancella</button>
    </form>
@endsection
