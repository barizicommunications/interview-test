<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Author;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('welcome');
        $categories = Category::all();
        $authors = Author::all();
        $postschunk = Post::all()->chunk(3);
        return view('posts.index', compact('postschunk', 'categories', 'authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function postsByCategory($id)
    {
        # code...
        $categories = Category::all();
        $authors = Author::all();
        $postschunk = Post::where('category_id', $id)->get()->chunk(3);
        return view('category.index', compact('postschunk', 'categories', 'authors'));
    }

    public function postsByAuthor($id)
    {
        # code...
        $categories = Category::all();
        $authors = Author::all();
        $postschunk = Post::where('author_id', $id)->get()->chunk(3);
        return view('posts.index', compact('postschunk', 'categories', 'authors'));
    }

    public function searchPosts(Request $request)
    {
        # code...
        $categories = Category::all();
        $authors = Author::all();
        $postschunk = Post::where('title',  'like', '%'.$request->search.'%')
        ->orWhereRelation('author', 'name',  'like', '%'.$request->search.'%')
        ->get()
        ->chunk(3);
        return view('posts.index', compact('postschunk', 'categories', 'authors'));
    }
}
