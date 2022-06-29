@extends("layout.main")

@section("content")
    <div class="container">
        <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
        <h2>{{ $comic->title }}</h2>
        <h3>{{ $comic->type }}</h3>
    </div>
@endsection
