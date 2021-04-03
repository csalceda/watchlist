@extends('layout.admin')

@section('content')

<div class="container block my-4">
    <div class="d-flex justify-content-between">
        <h4>Edit {{ $show->title }}</h4>
    </div>
    <hr>

    {{-- Start Form --}}
    <div class="container">
        <form action="{{ route('shows.update', $show->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="col-form-label" for="title">Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title" id="title" value="{{ $show->title }}">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="description">Description</label>
                <textarea class="form-control" name="description" id="descrpition" rows="5">{{ $show->description }}</textarea>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="status">Status</label>
                    <select class="custom-select" name="status" id="status">
                        @if ($statuses->count())
                            @foreach($statuses as $status)
                                @if ($show->status_id == $status->id)
                                    <option value="{{ $status->id }}" selected>{{ $status->title }}</option>
                                @else    
                                    <option value="{{ $status->id }}">{{ $status->title }}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group col">
                    <label for="genre">Genre</label>
                    <select class="custom-select" name="genre" id="genre">
                        @if ($genres->count())
                            @foreach($genres as $genre)
                                @if ($show->status_id == $genre->id)
                                    <option value="{{ $genre->id }}" selected>{{ $genre->title }}</option>
                                @else    
                                    <option value="{{ $genre->id }}">{{ $genre->title }}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="show_image">Choose New Image</label>
                <input type="file" class="form-control-file" name="show_image" id="show_image" aria-describedby="fileHelp">
                <small id="show_image" class="form-text text-muted">Select an image for this show.</small>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    {{-- End Form --}}
</div>
    
@endsection