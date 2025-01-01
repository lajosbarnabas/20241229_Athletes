<x-layout>
    <h1>Search for an athlete</h1>
    <form method="POST" action="{{route('athletes.process.search')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
