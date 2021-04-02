@extends('layout.admin')

@section('content')
    
<div class="container block my-4">
    <div class="d-flex justify-content-between">
        <h4>Add Genre</h4>
    </div>
    <hr>

    {{-- Start Form --}}
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label class="col-form-label" for="genre">Name</label>
                <input type="text" class="form-control" placeholder="Genre" name="name" id="genre">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    {{-- End Form --}}
</div>

@endsection