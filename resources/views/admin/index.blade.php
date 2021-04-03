@extends('layout.admin')

@section('content')

    <div class="container-lg mt-4">
        <h4>Hello, {{ auth()->user()->name }}</h4>
    </div>
    
@endsection