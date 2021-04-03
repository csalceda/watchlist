@extends('layout.admin')

@section('content')
    
<div class="container block my-4">
    <div class="d-flex justify-content-between">
        <h4>All Status</h4>
        <a href="{{ route('status.create') }}" class="btn btn-success">Add Status</a>
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
            @if($statuses->count())
                @foreach($statuses as $status)
                    <tr>
                        <td>{{ $status->id }}</td>
                        <td>{{ $status->title }}</td>
                        <td class="d-flex">
                            <a href="{{ route('status.update', $status->id) }}" class="btn btn-warning mx-1">Edit</a>
                            <form action="{{ route('status.destroy', $status->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $statuses->links() }}
    </div>

</div>

@endsection