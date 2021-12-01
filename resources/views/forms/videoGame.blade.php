@extends("layouts.app")

@section('content')
    <div class="container mt-4 ">
        <h3 class="mb-5">Add Video Game Review</h3>

        <form class="col-8" method="POST" action="/videogame" enctype="multipart/form-data">
            @csrf
            <input type="number" value="{{Auth::user()->id}}" class="d-none" name="user" />

            <div class="form-group mt-2">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" accept=".jpeg, .jpg, .png" name="image" />
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Game Name</label>
                <input type="text" class="form-control" placeholder="Enter Game Name" name="game_name" />
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Platforms</label>
                <input type="text" class="form-control" placeholder="Enter Platforms" name="platform" />
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Genre</label>
                <select name="cars" class="form-control" multiple name="genre">
                    <option value="volvo">Action</option>
                    <option value="saab">Adventure</option>
                    <option value="opel">FairyTale</option>
                    <option value="audi">SciFi</option>
                </select>
            </div>


            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Release Date</label>
                <input type="date" class="form-control" placeholder="Enter Release Date" name="release_date" />
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Rating</label>
                <input type="number" class="form-control" placeholder="Enter Video Game Rating" name="rating" />
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Review</label>
                <textarea class="form-control" placeholder="Enter Video Game Review" name="review"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>

    </div>

@endsection
