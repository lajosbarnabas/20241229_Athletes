<x-layout>
    <h1>Edit an athlete's data</h1>
    <form method="POST" action="{{route('athletes.update', $athlete->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invaled @enderror" id="name" name="name" value="{{ $athlete->name }}">
            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control @error('age') is-invaled @enderror" id="age" name="age" value="{{ $athlete->age }}">
            @error('age')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sport" class="form-label">Sport</label>
            <input type="text" class="form-control @error('sport') is-invaled @enderror" id="sport" name="sport" value="{{ $athlete->sport }}">
            @error('sport')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control @error('country') is-invaled @enderror" id="country" name="country" value="{{ $athlete->country }}">
            @error('country')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
