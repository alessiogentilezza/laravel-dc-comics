
@extends('layouts.app')

@section('page-title', 'Lista fumetti')

@section('content')

@foreach ($comics as $comic)
<div class="card" style="width: 18rem;">
    <img src="{{ $comic->thumb }}" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <p class="card-text">{{substr($comic->description, 0, 100 )}}</p>
        <p class="card-text">{{'$'.' '.$comic->price}}</p>
        <p class="card-text">{{$comic->series}}</p>
        <p class="card-text">{{$comic->sale_date}}</p>
        <p class="card-text">{{$comic->type}}</p>
    </div>
</div>
@endforeach



@endsection
