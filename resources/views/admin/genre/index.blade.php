@extends('layout.admin')

@section('content')
    
<div class="container block my-4">
    <div class="d-flex justify-content-between">
        <h4>All Genre</h4>
        <a href="{{ route('genre.create') }}" class="btn btn-success">Add Genre</a>
    </div>
    <hr>

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
            <tr>
                <td>1</td>
                <td>Comedy</td>
                <td>
                    <a href="http://" class="btn btn-info">View</a>
                    <a href="http://" class="btn btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger">Danger</button>
    
                </td>
            </tr>
        </tbody>
    </table>

</div>

@endsection