@extends("layout.main")

@section("content")
    <div class="container ">
        <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
        <h2>{{ $comic->title }}</h2>
        <h3>{{ $comic->type }}</h3>
        <a class="btn btn-primary" href="{{ route("comics.index") }}">torna alla home </a>
    </div>
@endsection
