<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('post.index', compact('posts'));
    }

    public function show()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post = Post::create($validatedData);

        return $post
            ? redirect()->route('posts.index')->with('success', 'Post created successfully.')
            : back()->withErrors(['error' => 'There was an error creating the post. Please try again.']);
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        return $post->update($validatedData)
            ? redirect()->route('posts.index')->with('success', 'Post updated successfully.')
            : back()->withErrors(['error' => 'There was an error updating the post. Please try again.']);
    }

    public function delete(Post $post)
    {
        return view('post.delete', compact('post'));
    }

    public function destroy(Post $post)
    {
        return $post->delete()
            ? redirect()->route('posts.index')->with('success', 'Post deleted successfully.')
            : back()->withErrors(['error' => 'There was an error deleting the post. Please try again.']);
    }
}
