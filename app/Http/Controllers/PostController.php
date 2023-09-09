<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('posts.create');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = strip_tags($request->input('title'));
        $post->content = strip_tags($request->input('content'));
        $post->user_id = Auth::id();
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with(['user', 'comment'])->findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        if (! Gate::allows('update-post', $post)) {
            if (Auth::check()) {
                abort(403);
            } else {
                return redirect()->route('login');
            }
        }

        return view('posts.update', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->id = $id;
        $post->title = strip_tags($request->input('title'));
        $post->content = strip_tags($request->input('content'));
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        if (! Gate::allows('delete-post', $post)) {
            if (Auth::check()) {
                abort(403);
            } else {
                return redirect()->route('login');
            }
        }

        $post->delete();
        return redirect()->route('posts.index');
    }
}
