@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-12">
                <img src="{{$post->featured_image_url}}" alt="{{$post->title}}">
                <h2>{{$post->title}}</h2>
                <p><small>{{$post->slug}}</small></p>
                <p>{{$post->body}}</p>
            </div>
        </div>
    @endforeach
@endsection