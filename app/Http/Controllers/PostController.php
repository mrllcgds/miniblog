<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
{
    // Validate input
    $validated = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required'
    ]);

    // Create a new post linked to the logged-in user
    $post = new Post();
    $post->title = $validated['title'];
    $post->content = $validated['content'];
    $post->user_id = Auth::id(); // safer than auth()->id()
    $post->save();

    // Redirect back to posts list with success message
    return redirect()->route('posts.index')
                     ->with('success', 'Post created successfully.');
}


    public function show(Post $post)
    {
        //
    }


    public function edit(Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('posts.edit', compact('post'));
    }


    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== Auth::id()) {
    abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        $post->update($request->only('title','content'));
        return redirect()->route('posts.index')->with('success', 'Post updated.');
    }


    public function destroy(Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted.');
    }
}
