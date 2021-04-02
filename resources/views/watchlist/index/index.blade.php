@extends('layout.app')

@section('content')

<div class="container my-4">
    <h3>All Shows</h3>
    <hr>
    {{-- Cards --}}
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        <div class="col my-2">
            <div class="card shadow-sm">
                <img src="{{ asset('img/header.png') }}" alt="">
                <div class="card-body">
                <h4>Title</h4>
                <small>Status: <span class="status">Watching</span></small>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group row ml--1">
                            <span class="badge badge-warning col m-1">Genre</span>
                            <span class="badge badge-warning col m-1">Genre</span>
                            <span class="badge badge-warning col m-1">Genre</span>
                        </div>
                    </div>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col my-2">
            <div class="card shadow-sm">
                <img src="{{ asset('img/header.png') }}" alt="">
                <div class="card-body">
                <h4>Title</h4>
                <small>Status: <span class="status">Watching</span></small>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group row ml--1">
                            <span class="badge badge-warning col m-1">Genre</span>
                            <span class="badge badge-warning col m-1">Genre</span>
                            <span class="badge badge-warning col m-1">Genre</span>
                        </div>
                    </div>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col my-2">
            <div class="card shadow-sm">
                <img src="{{ asset('img/header.png') }}" alt="">
                <div class="card-body">
                <h4>Title</h4>
                <small>Status: <span class="status">Watching</span></small>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group row ml--1">
                            <span class="badge badge-warning col m-1">Genre</span>
                            <span class="badge badge-warning col m-1">Genre</span>
                            <span class="badge badge-warning col m-1">Genre</span>
                        </div>
                    </div>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col my-2">
            <div class="card shadow-sm">
                <img src="{{ asset('img/header.png') }}" alt="">
                <div class="card-body">
                <h4>Title</h4>
                <small>Status: <span class="status">Watching</span></small>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group row ml--1">
                            <span class="badge badge-warning col m-1">Genre</span>
                            <span class="badge badge-warning col m-1">Genre</span>
                            <span class="badge badge-warning col m-1">Genre</span>
                        </div>
                    </div>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection