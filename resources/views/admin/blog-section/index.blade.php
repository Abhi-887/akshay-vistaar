@extends('admin.layouts.master')
@section('title', 'blogs')

@section("styles")
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Post</h5>

            <!-- Vertical Form -->
            <form class="row g-3">
                <div class="col-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title">
                </div>
                <div class="col-12">
                    <label for="category">Category</label>
                    <select name="category" class="form-control">
                        <option disabled selected>Choose Option</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Published</label>
                    <select name="is_publish" class="form-control">
                        <option disabled selected>Choose Option</option>
                        <option value="1">published</option>
                        <option value="0">draft</option>
                    </select>
                </div>

                <div class="col-12">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="col-12">
                    <label>Description</label>
                    <div class="summernote" id="summernote">summernote 1</div>

                </div> <!-- Close the div for "col-12" containing Description field -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form><!-- Vertical Form -->
        </div>
    </div>
@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>

@endsection
