<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Post;

class OnePost extends Component
{

    // protected $listeners = ['CommentAdded' => '$refresh'];
    public $id;

    public function render()
    {
        $post = Post::with(['user', 'comment'])->findOrFail($this->id);
        return view('livewire.one-post', ['post' => $post]);
    }

    #[On('CommentAdded')]
    public function refresh()
    {
        $this->render();
    }
}
