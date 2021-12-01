@extends("layouts.app")

@section('content')

    <div class="container mt-4">
        <div class="row">
            <!-- single movie item -->
            <div class="col-lg-3 col-md-6">

                <img src="/storage/images/{{$music->image}}" class="rounded img" width="200" alt="">
            </div>

            <div class="col-lg-3 col-md-6">
                <div>
                    <span class="h5">Album Name : </span>
                    <span class="h5"> {{$music->album_name}} </span>
                </div>

                <div>
                    <span class="h5">Album Artist : </span>
                    <span class="h5"> {{$music->album_artist}}</span>
                </div>

                <div>
                    <span class="h5">Genre : </span>
                    <span class="h5">
                        Jazz
                    </span>
                </div>

                <div>
                    <span class="h5">Release Date : </span>
                    <span class="h5"> {{$music->release_date}} </span>
                </div>

                <div class="mt-2">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $music->rating)
                            <i><span class="fas fa-star text-warning"></span></i>
                        @else
                            <i><span class="fas fa-star "></span></i>
                        @endif
                    @endfor
                </div>
                <div class="mt-3 h4">
                    Rating of {{$music->rating}} out of 5
                </div>
            </div>

            <div class="col-lg-3">
                <h5>Tracklist</h5>
                <ol>
                    <li>Bearing Dry</li>
                    <li>Winged Seas</li>
                    <li>Green Darkness</li>
                    <li>The fifth Day</li>
                    <li>Moving Trails</li>
                    <li>Move Together</li>
                    <li>Sleepless Night</li>
                    <li>On The Move</li>
                </ol>
            </div>


        </div>

        <div class="mt-5">
            <h2><u> Review</u></h2>
            <p>
                {{$music->review}}
            </p>
        </div>
    </div>

@endsection
