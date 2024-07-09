<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Not working go to App\Livewire\AddComment.php

        // $comment = new Comment;
        // $comment->content = strip_tags($request->input('content'));
        // $comment->post_id = strip_tags($request->input('post_id'));
        // if (Auth::check()) {
        //     $comment->user_id = Auth::id();
        // } else {
        //     $comment->user_id = 1;
        // }
        // $comment->save();
        // return redirect()->route('posts.show', $comment->post_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
