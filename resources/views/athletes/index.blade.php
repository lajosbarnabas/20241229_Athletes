<x-layout>
    <h1>Athletes</h1>
    <div class="row">
        @foreach ($athletes as $athlete)
        <div class="col-md-3 mb-5">
            <div class="card h-100 bg-info bg-gradient text-white">
                <div class="card-body">
                    <div class="border border-top-0 border-start-0 rounded mb-2">
                        <h5 class="card-title">Athlete's name:<br> <i>{{$athlete->name}}</i></h5>
                    </div>
                    <p class="card-text">Age: <i>{{$athlete->age}}</i></p>
                    <p class="card-text">Sport: <i>{{$athlete->sport}}</i></p>
                    <p class="card-text">Country: <i>{{$athlete->country}}</i></p>
                    <div class="position-absolute bottom-0 end-0 mx-3 mb-3">
                        <a class="btn btn-primary" href="{{route('athletes.show', $athlete->id)}}">Details</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
