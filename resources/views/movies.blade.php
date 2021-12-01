@extends("layouts.app")

@section('content')

    <!-- Body section for the movie item -->
    <div class="container mt-4">
        <div class="row">

            <!-- single movie item -->
            @foreach ($movies as $movie)
                <div class="col-lg-3 col-md-3 mb-4">
                    <div class="h3">{{ $movie->title}}</div>
                    <a href="/movie/{{$movie->id}}" target="_blank">
                        <img src="/storage/images/{{$movie->image}}" class="rounded img" width="200" alt="">
                    </a>
                    <div class="mt-2">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $movie->rating)
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
