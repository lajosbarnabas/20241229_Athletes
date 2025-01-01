<x-layout>
    <h1>Add a new athlete</h1>
    <form method="POST" action="{{route('athletes.store')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{old('age')}}">
            @error('age')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sport" class="form-label">Sport</label>
            <input type="text" class="form-control @error('sport') is-invalid @enderror" id="sport" name="sport" value="{{old('sport')}}">
            @error('sport')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{old('country')}}">
            @error('country')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
