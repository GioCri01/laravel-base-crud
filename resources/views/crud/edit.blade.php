@extends("layout.main")

@section("content")
<div class="container mt-5">
    <form class="form-control" action="{{ route("comics.update",$comics) }}" method="POST">
        @method("PUT")
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Titolo Comics</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titolo Comics">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">URL Copertina Comics</label>
            <input type="text" class="form-control" name="image"id="image" placeholder="URL Copertina Comics">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tipo Comics</label>
            <input type="text" class="form-control" name="type"id="type" placeholder="Tipo Comics">
          </div>

          <input class="btn btn-primary" type="submit" value="invia">
    </form>
</div>
@endsection
