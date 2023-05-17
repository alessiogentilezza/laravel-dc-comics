@extends('layouts.app')

@section('page-title', 'Lista fumetti')

@section('content')

    <a href="{{ route('comics.create') }}" class="btn btn-warning m-3">Aggiungi nuovo fumetto</a>
    <div class=" d-flex flex-wrap">
        @foreach ($comics as $comic)
            <div class="card m-3" style="width: 18rem">
                <img src="{{ $comic->thumb }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ substr($comic->description, 0, 100) }}</p>
                    <p class="card-text">{{ '$' . ' ' . $comic->price }}</p>
                    <p class="card-text">{{ $comic->series }}</p>
                    <p class="card-text">{{ $comic->sale_date }}</p>
                    <p class="card-text">{{ $comic->type }}</p>
                    <div class="d-flex justify-content-around">
                        <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Vedi</a>
                        <a class="btn btn-light" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



@endsection
