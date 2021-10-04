@extends('frontend.layouts.index')

@section('content')

    <div class="container mt-5">

        <h1>Create New Blog</h1>

        <form action="{{ route('frontend.blog.store') }}" method="post" class="mt-5" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="group">
                <input type="text" name="title">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Title Blog</label>
            </div>

            <div class="form-group">
                <textarea class="form-control" name="content" id="content" required rows="3"></textarea>
            </div>

            <div class="form-group">
                <input type="file" class="form-control-file" required name="image" id="">
            </div>

            <div class="form-group">
                <button class="btn btn-dark float-right" value="save" type="submit">Create</button>
            </div>

        </form>

    </div>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        var options = {
          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
          filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
          filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
          filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace( 'content', options );
    </script>

@endsection