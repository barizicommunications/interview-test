@extends('layouts.app')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1>Interview Test</h1>
        </div>
        <div class="col-md-3">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Filter by Category
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @foreach($categories as $category)
                    <li><a class="dropdown-item" href="{{ route('posts-by-category', ['id' => $category->id]) }}">{{$category->name}}</a></li>
                    @endforeach
                   
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Filter by Author
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @foreach($authors as $author)
                    <li><a class="dropdown-item" href="{{ route('posts-by-author', ['id' => $author->id]) }}">{{$author->name}}</a></li>
                    @endforeach
                   
                </ul>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            @foreach($postschunk as $posts)
                <div class="card-group">
                    @foreach($posts as $post)
                        <div class="card">
                            <img src="{{$post->featured_image_url}}" class="card-img-top" alt="{{$post->title}}">
                            <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p><small class="float-start">{{$post->author->name}}</small> <small class="float-end">{{$post->category->name}}</small></p> <br>
                            <p class="card-text"><p>{{$post->body}}</p></p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                            <small class="text-muted float-start">{{\Carbon\Carbon::parse($post->created_at)->format('d-M-Y')}}</small>
                            <a class="btn btn-success float-end" href="{{ route('posts.show', ['post' => $post->id]) }}">View More</a>
                            </div>
                        </div>
                    @endforeach
                </div> <br>
            @endforeach
        </div>
    </div>
@endsection