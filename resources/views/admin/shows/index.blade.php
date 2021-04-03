@extends('layout.admin')

@section('content')

    <div class="container block my-4">
        <div class="d-flex justify-content-between">
            <h4>All Shows</h4>
            <a href="{{ route('shows.create') }}" class="btn btn-success">Add Show</a>
        </div>
        <hr>

        @if(session('status'))
            <div class="p-3 mb-2 container bg-success text-white">
                {{session('status')}}
            </div>
        @endif

        {{-- Rows of Shows --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @if ($shows->count())
                @foreach ($shows as $show)
                    <div class="col my-2">
                        <div class="card shadow-sm">
                            @if($show->image)
                                <img src="{{ asset('show_img/'.$show->image) }}" class="show-img" alt="">
                            @endif
                            <div class="card-body">
                            <h4>{{ $show->title }}</h4>
                            <small>Status: <span class="status">{{ $show->getStatus->title }}</span></small>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group row ml--1">
                                        <span class="badge badge-warning col m-1">{{ $show->getGenre->title }}</span>
                                    </div>
                                </div>
                                @if ($show->description)
                                    <p class="card-text">{{ $show->description }}</p>
                                @endif
                                <hr>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    {{-- <label class="btn btn-outline-primary">
                                        <a href="{{ route('shows.show', $show->id) }}" class="text-dark text-decoration-none">View</a>
                                    </label> --}}
                                    <label class="btn btn-outline-primary">
                                        <a href="{{ route('shows.update', $show->id) }}" class="text-dark text-decoration-none">Edit</a>
                                    </label>
                                </div>
                                <div class="btn-group float-right" role="group" aria-label="Third group">
                                    <form action="{{ route('show.destroy', $show->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            
        </div>
        <div class="d-flex justify-content-center">
                {{ $shows->links() }}
            </div>
    </div>

@endsection