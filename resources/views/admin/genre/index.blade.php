@extends('layout.admin')

@section('content')
    
<div class="container block my-4">
    <div class="d-flex justify-content-between">
        <h4>All Genre</h4>
        <a href="{{ route('genre.create') }}" class="btn btn-success">Add Genre</a>
    </div>
    <hr>

    @if(session('status'))
        <div class="p-3 mb-2 container bg-success text-white">
            {{session('status')}}
        </div>
    @endif

    {{-- Table --}}
    <table class="table">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th class="flex-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $genre)
                <tr>
                    <td>{{ $genre->id }}</td>
                    <td>{{ $genre->title }}</td>
                    <td class="d-flex">
                        <a href="{{ route('genre.update', $genre->id) }}" class="btn btn-warning mx-1">Edit</a>
                        <form action="{{ route('genre.destroy', $genre->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection