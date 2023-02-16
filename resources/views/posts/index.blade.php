@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($postschunk as $posts)
                <div class="card-group">
                    @foreach($posts as $post)
                        <div class="card">
                            <img src="{{$post->featured_image_url}}" class="card-img-top" alt="{{$post->title}}">
                            <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p><small>{{$post->slug}}</small></p>
                            <p class="card-text"><p>{{$post->body}}</p></p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                            <small class="text-muted float-start">{{\Carbon\Carbon::parse($post->created_at)->format('d-M-Y')}}</small>
                            <button class="btn btn-success float-end">View More</button>
                            </div>
                        </div>
                    @endforeach
                </div> <br>
            @endforeach
        </div>
    </div>
@endsection