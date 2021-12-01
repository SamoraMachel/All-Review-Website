@extends("layouts.app")

@section('content')

    <div class="container mt-4">
        <div class="row">
            <!-- single movie item -->
            <div class="col-lg-3 col-md-6">

                <img src="/storage/images/{{$videoGame->image}}" class="rounded img" width="200" alt="">
            </div>

            <div class="col-lg-3 col-md-6">
                <div>
                    <span class="h5">Game Name : </span>
                    <span class="h5"> {{$videoGame->game_name}} </span>
                </div>

                <div>
                    <span class="h5">Platforms : </span>
                    <span class="h5"> {{$videoGame->platform}} </span>
                </div>

                <div>
                    <span class="h5">Genre : </span>
                    <span class="h5"> Jazz </span>
                </div>

                <div>
                    <span class="h5">Release Date : </span>
                    <span class="h5"> {{$videoGame->release_date}} </span>
                </div>

                <div class="mt-2">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $videoGame->rating)
                            <i><span class="fas fa-star text-warning"></span></i>
                        @else
                            <i><span class="fas fa-star "></span></i>
                        @endif
                    @endfor
                </div>
                <div class="mt-3 h4">
                    Rating of {{$videoGame->rating}} out of 5
                </div>
            </div>


        </div>

        <div class="mt-5">
            <h2><u> Review</u></h2>
            <p>
               {{$videoGame->review}}
            </p>
        </div>
    </div>

@endsection
