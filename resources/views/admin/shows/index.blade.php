@extends('layout.admin')

@section('content')

    <div class="container block my-4">
        <div class="d-flex justify-content-between">
            <h4>All Shows</h4>
            <a href="{{ route('shows.create') }}" class="btn btn-success">Add Show</a>
        </div>
        <hr>

        {{-- Rows of Shows --}}
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
                    <hr>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-primary">
                                <input type="checkbox" autocomplete="off"> View
                            </label>
                            <label class="btn btn-outline-primary">
                                <input type="checkbox" autocomplete="off"> Edit
                            </label>
                        </div>
                        <div class="btn-group float-right" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection