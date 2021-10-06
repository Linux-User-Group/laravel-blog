@extends('frontend.layouts.index')

{{-- @extends('title', 'Create Blog') --}}

@section('content')

    <div class="container">

        <div id="list-blog">
            <div class="row">
                @foreach ($article as $data)
                    <div class="col-md-9 mt-3 mb-5">
                        <h1>{{ $data->title }}</h1>
                        <p>{!! Str::limit($data->content, 50) !!}</p>
                        <a href="{{ route('frontend.blog.edit', $data) }}" class="btn btn-outline-success rounded-circle"><i class="far fa-edit"></i></a>
                        <a href="{{ route('frontend.blog.delete', $data->id) }}" class="btn btn-outline-danger rounded-circle"><i class="fas fa-trash"></i></a>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('storage/'.$data->image) }}"
                            class="img-fluid" alt="">
                    </div>
                @endforeach



            </div>

        </div>


    </div>

@endsection
