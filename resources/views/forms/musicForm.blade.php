@extends("layouts.app")

@section('content')
    <div class="container mt-4 ">
        <h3 class="mb-5">Add Music Review</h3>

        <form class="col-8" method="POST" action="/music" enctype="multipart/form-data">
            @csrf

            <input class="d-none" value={{ Auth::user()->id }} name="user"/>

            <div class="form-group mt-2">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" accept=".jpeg, .jpg, .png" name="image" />
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Album Name</label>
                <input type="text" class="form-control" placeholder="Enter Album Name" name="album_name" />
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Album Artist</label>
                <input type="text" class="form-control" placeholder="Enter Album Artist" name="album_artist" />
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Release Date</label>
                <input type="date" class="form-control" placeholder="Enter Release Date" name="release_date" />
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Tracklist</label>
                <select class="form-control" multiple name="tracklist">
                    <option value="volvo">Samora</option>
                    <option value="saab">Machel</option>
                    <option value="opel">Felix</option>
                    <option value="audi">Manyara</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Rating</label>
                <input type="number" class="form-control" placeholder="Enter Music Rating" name="rating" />
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Review</label>
                <textarea class="form-control" placeholder="Enter Music Review" name="review"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>

    </div>

@endsection
