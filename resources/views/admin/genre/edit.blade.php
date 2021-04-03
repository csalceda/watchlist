@extends('layout.admin')

@section('content')
    
<div class="container block my-4">
    <div class="d-flex justify-content-between">
        <h4>Edit {{ Str::ucfirst($genre->title) }} genre</h4>
    </div>
    <hr>

    @if(session('status'))
        <div class="p-3 mb-2 container bg-danger text-white">
            {{session('status')}}
        </div>
    @endif

    {{-- Start Form --}}
    <div class="container">
        <form action="{{ route('genre.update', $genre) }}" method="post">
            @csrf
            <div class="form-group">
                <label class="col-form-label" for="genre">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="genre" value="{{ $genre->title }}">
                @error('name')
                    <div class="m-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('genre') }}" class="btn btn-link text-danger">Back</a>
        </form>
    </div>
    {{-- End Form --}}
</div>

@endsection