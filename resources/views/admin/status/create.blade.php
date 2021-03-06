@extends('layout.admin')

@section('content')
    
<div class="container block my-4">
    <div class="d-flex justify-content-between">
        <h4>Add Status</h4>
    </div>
    <hr>

    {{-- Start Form --}}
    <div class="container">
        <form action="{{ route('status') }}" method="post">
            @csrf
            <div class="form-group">
                <label class="col-form-label" for="status">Name</label>
                <input type="text" class="form-control" placeholder="Status" name="name" id="status">
                @error('name')
                    <div class="m-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('status') }}" class="btn btn-link text-danger">Back</a>
        </form>
    </div>
    {{-- End Form --}}
</div>

@endsection