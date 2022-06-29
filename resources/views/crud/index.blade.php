@extends("layout.main")

@section("content")
    <div class="container-fluid d-flex flex-wrap mt-5">
        @foreach ($comics as $comic )
            <div class="box">
                <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
                <h2>{{ $comic->title }}</h2>
                <h3>{{ $comic->type }}</h3>
                <a class="btn btn-primary" href="{{ route("comics.show", $comic->id) }}">SHOW </a>
            </div>
        @endforeach

    </div>

@endsection
