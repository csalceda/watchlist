@extends('layout.app')

@section('content')

<div class="container my-4">
    <h3>All Shows</h3>
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