@extends('layout.admin')

@section('content')
    
<div class="container block my-4">
    <div class="d-flex justify-content-between">
        <h4>Add Status</h4>
    </div>
    <hr>

    {{-- Start Form --}}
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label class="col-form-label" for="status">Name</label>
                <input type="text" class="form-control" placeholder="Status" name="name" id="status">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    {{-- End Form --}}
</div>

@endsection