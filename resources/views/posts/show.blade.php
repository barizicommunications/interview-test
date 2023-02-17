@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <img src="{{$post->featured_image_url}}" class="card-img-top" alt="{{$post->title}}" height="300px">
                <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p><small class="float-start">{{$post->author->name}}</small> <small class="float-end">{{$post->category->name}}</small></p> <br>
                <p class="card-text"><p>{{$post->body}}</p></p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                <small class="text-muted float-start">{{\Carbon\Carbon::parse($post->created_at)->format('d-M-Y')}}</small>
                <!-- <a class="btn btn-success float-end" href="{{ route('posts.show', ['post' => $post->id]) }}">View More</a> -->
                </div>
            </div>
                   
        </div>
    </div>
@endsection