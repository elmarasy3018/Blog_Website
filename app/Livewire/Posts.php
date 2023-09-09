<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::paginate(9);
        return view('livewire.posts', ['posts' => $posts]);
    }
}
