<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest('updated_at')->get();
        return view('Dashboard.Posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'post_title' => 'required|max:100',
            'post_content' => 'required',
            'author' => 'required|max:255'
            ]);
        $post = new Post;
        $post->post_title = $request->post_title;
        $post->post_content = $request->post_content;
        $post->author = $request->author;
        $post->save();
        $request->session()->flash('msg-success', 'Post has been Added Successful');
        return redirect ('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       $post = Post::findOrFail($post->id);
       return view('Dashboard.Posts.show', compact('post'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $post = Post::findOrFail($post->id);
        return view ('Dashboard.Posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
       $this->validate($request, [
        'post_title' => 'required|max:100',
        'post_content' => 'required',
        'author' => 'required|max:255'
        ]);
       $post->post_title = $request->post_title;
       $post->post_content = $request->post_content;
       $post->author = $request->author;
       $post->save();
       $request->session()->flash('msg-success', 'Post has been Updated Successful');
       return redirect ('/posts');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Post $post)
    {
        $post = Post::findOrFail($post->id);
        $post->delete();
        $request->session()->flash('msg-success', 'Post has been Deleted Successful');
        return back();
    }
}
