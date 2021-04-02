@extends('layout.admin')

@section('content')

<div class="container block my-4">
    <div class="d-flex justify-content-between">
        <h4>Add Shows</h4>
    </div>
    <hr>

    {{-- Start Form --}}
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label class="col-form-label" for="title">Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title" id="title">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="description">Description</label>
                <textarea class="form-control" name="description" id="descrpition" rows="5"></textarea>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="status">Status</label>
                    <select class="custom-select" name="status" id="status">
                        <option selected>Select Status</option>
                        <option>Watching</option>
                        <option>On-hold</option>
                        <option>Did not finish</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="genre">Genre</label>
                    <select class="custom-select" name="genre" id="genre">
                        <option selected>Select Genre</option>
                        <option>Comedy</option>
                        <option>Drama</option>
                        <option>Supernatural</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="show_image">Choose Image</label>
                <input type="file" class="form-control-file" name="show_image" id="show_image" aria-describedby="fileHelp">
                <small id="show_image" class="form-text text-muted">Select an image for this show.</small>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    {{-- End Form --}}
</div>
    
@endsection