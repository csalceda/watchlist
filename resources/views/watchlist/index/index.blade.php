@extends('layout.app')

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col">
            <h3 class="my-2">All Shows</h3>
        </div>
        <div class="col d-flex justify-content-end">
            <form action="{{ route('shows.filter') }}" method="get">
                <select name="genre" id="genre" class="form-control-sm mx-2 mt-1">
                    @if($genres->count())
                        <option value="" selected>Genre</option>
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}" >{{ $genre->title }}</option>
                        @endforeach
                    @endif
                </select>
                <select name="status" id="status" class="form-control-sm mx-2 mt-1">
                    @if($statuses->count())
                        <option value="" selected>Status</option>
                        @foreach($statuses as $status)
                            <option value="{{ $status->id }}" >{{ $status->title }}</option>
                        @endforeach
                    @endif
                </select>
                <button type="submit" class="btn btn-link mx-0">Go</button>
                @if(isset($query))
                    <a href="{{ route('index') }}" class="btn btn-link text-decoration-none mx-0">Clear Filter</a>
                @endif
            </form>
        </div>
    </div>
    <hr>
    {{-- Cards --}}
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
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            
        </div>

    </div>

</div>

@endsection