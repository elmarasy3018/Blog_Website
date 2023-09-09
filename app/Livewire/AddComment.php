<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class AddComment extends Component
{

    public $content;
    public $id;

    public function render()
    {
        return view('livewire.add-comment');
    }

    public function AddComment()
    {
        $comment = new Comment;
        $comment->content = strip_tags($this->content);
        $comment->post_id = strip_tags($this->id);
        if (Auth::check()) {
            $comment->user_id = Auth::id();
        } else {
            $comment->user_id = 0;
        }
        $comment->save();
        // $this->dispatch('CommentAdded');
        $this->dispatch('CommentAdded');
        $this->id = '';
        $this->content = '';
    }

    // #[On('CommentAdded')]
    // public function refresh()
    // {
    //     $this->content = '';
    //     $this->render();
    // }
}
