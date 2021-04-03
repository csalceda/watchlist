@extends('layout.admin')

@section('content')
    
<div class="container block my-4">
    <div class="d-flex justify-content-between">
        <h4>{{ $show->title }}</h4>
        <a href="{{ route('shows.update', $show->id) }}" class="btn btn-warning">Edit</a>
    </div>
    <hr>
    <img src="{{ asset('show_img/'.$show->image) }}" class="show-header">
</div>

@endsection