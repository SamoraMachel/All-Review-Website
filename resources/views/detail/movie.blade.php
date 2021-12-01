@extends("layouts.app")

@section('content')

    <div class="container mt-4">
        <div class="row">

            <!-- Body section for the movie item -->
            <div class="container mt-4">
                <div class="row">
                    <!-- single movie item -->
                    <div class="col-lg-3 col-md-6">

                        <img src="/storage/images/{{ $movie->image }}" class="rounded img" width="200" alt="">
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="h3 "> {{ $movie->title }} </div>

                        <div class="mt-2">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $movie->rating)
                                    <i><span class="fas fa-star text-warning"></span></i>
                                @else
                                    <i><span class="fas fa-star "></span></i>
                                @endif
                            @endfor
                        </div>
                        <div class="mt-3 h4">
                            Rating of {{ $movie->rating }} out of 5
                        </div>
                    </div>


                </div>

                <div class="mt-5">
                    <h2><u> Review</u></h2>
                    <p>
                        {{ $movie->review }}
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
