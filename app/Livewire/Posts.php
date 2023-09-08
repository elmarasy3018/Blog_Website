<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.posts', ['posts' => $posts]);
    }
}
