@extends("layout.main")

@section("content")
<div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-control" action="{{ route("comics.store") }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Titolo Comics</label>
            <input type="text" class="form-control @error("title") is-invalid @enderror"name="title" id="title"  placeholder="Titolo Comics">
            @error("title")
                <p class="text-danger">{{ $message }}</p>
            @enderror

          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">URL Copertina Comics</label>
            <input type="text" class="form-control @error("image") is-invalid @enderror" name="image"id="image" placeholder="URL Copertina Comics">
            @error("image")
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tipo Comics</label>
            <input type="text" class="form-control @error("type") is-invalid @enderror" name="type"id="type" placeholder="Tipo Comics">
            @error("type")
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>

          <input class="btn btn-primary" type="submit" value="invia">
    </form>
</div>
@endsection
