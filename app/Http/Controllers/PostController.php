<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $field = $request->validate([
            // 'user_id' => 'required',
            'title' => 'required',
            // 'short_body' => 'required',
            'body' => 'required'
        ]);
        $post = Post::create($field);
        return ['post' => $post];

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $field = $request->validate([
            // 'user_id' => 'required',
            'title' => 'required',
            // 'short_body' => 'required',
            'body' => 'required'
        ]);
        $post->update($field);
        return ['post' => $post];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return 'Post deleted successfully';
    }
}
