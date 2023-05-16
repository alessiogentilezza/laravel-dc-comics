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

                    <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Vedi</a>

                </div>
            </div>
        @endforeach
    </div>



@endsection
