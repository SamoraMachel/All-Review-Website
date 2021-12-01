@extends("layouts.app")

@section('content')

    <!-- Body section for the movie item -->
    <div class="container mt-4">
        <div class="row">

            <!-- single movie item -->
            @foreach ($videoGames as $videoGame)
                <div class="col-lg-3 col-md-3 mb-4">
                    <div class="h3">{{$videoGame->game_name}}</div>
                    <a href="/videogame/{{$videoGame->id}}" target="_blank">
                        <img src="/storage/images/{{$videoGame->image}}" class="rounded img" width="200" alt="">
                    </a>
                    <div class="mt-2">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $videoGame->rating)
                                <i><span class="fas fa-star text-warning"></span></i>
                            @else
                                <i><span class="fas fa-star "></span></i>
                            @endif
                        @endfor
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
