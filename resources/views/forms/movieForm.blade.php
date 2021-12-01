@extends("layouts.app")

@section("content")
<div class="container mt-4 ">
    <h3 class="mb-5">Add Movie Review</h3>

    <form class="col-8" method="post" action="/movie" enctype="multipart/form-data">
        @csrf
        <div class="d-none">
            <input type="number" value={{ Auth::user()->id }} name="user">
        </div>

        <div class="form-group mt-2" enctype>
            <label for="exampleInputEmail1">Image</label>
            <input type="file" class="form-control" name="image" />
        </div>

        <div class="form-group mt-2">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" placeholder="Enter Movie Title" name="title" />
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1">Rating</label>
            <input type="number" class="form-control" placeholder="Enter Movie Rating" name="rating" />
        </div>

        <div class="form-group mt-2">
            <label for="exampleInputEmail1">Review</label>
            <textarea class="form-control" placeholder="Enter Movie Review" name="review" ></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>

</div>

@endsection
