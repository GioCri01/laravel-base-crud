@extends("layout.main")

@section("content")
        @if (session("elemento_eliminato"))
        <div class="alert alert-primary" role="alert">
            {{session("elemento_eliminato")}}
        </div>
        @endif
    <div class="container-fluid d-flex flex-wrap mt-5">




        @foreach ($comics as $comic )
            <div class="box my-3">
                <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
                <h2>{{ $comic->title }}</h2>
                <h3>{{ $comic->type }}</h3>
                <a class="btn btn-primary" href="{{ route("comics.show", $comic->id) }}">SHOW </a>
                <a  class="btn btn-success" href="{{ route("comics.edit", $comic->id) }}">EDIT</a>

                <form class="d-inline"action="{{ route("comics.destroy",$comic) }}" method="POST"
                    onsubmit="return confirm('Confermi di voler eliminare {{ $comic->title }}')"
                >
                     @csrf
                    @method("DELETE")


                    <button class="btn btn-danger" type="submit"> DELETE</button>
                </form>
            </div>
        @endforeach

    </div>

@endsection
