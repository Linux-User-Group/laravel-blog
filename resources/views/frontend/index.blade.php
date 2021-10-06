@extends('frontend.layouts.index')

@section('content')

    <div class="container">

        <div id="hero">
            <h1>Simple Blog</h1>
            <p>Hey, you can't write anything in here. SHow your talent about write.</p>
            <a href="{{ route('frontend.blog.create') }}" class="btn btn-outline-dark rounded-circle"><i class="fas fa-pencil-alt"></i></a>
        </div>


    </div>


@endsection
