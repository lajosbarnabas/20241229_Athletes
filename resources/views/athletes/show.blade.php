<x-layout>
    <div class="container card h-100 bg-info bg-gradient text-white w-25 float-start">
        <div class="card-body">
            <h1 class="card-title">{{$athlete->name}}</h1>
        </div>
        <p class="card-text">Age: {{$athlete->age}}</p>
        <p class="card-text">Sport: {{$athlete->sport}}</p>
        <p class="card-text mb-3">Country: {{$athlete->country}}</p>
    </div>

    <div class="flex">
        <a href="{{route('athletes.edit', $athlete->id)}}" class="btn btn-warning my-2 ms-5 mt-5 mb-5 ">Edit</a>
        <form action="{{route('athletes.destroy', $athlete->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mb-3 ms-5">Delete</button>
        </form>
    </div>
</x-layout>
