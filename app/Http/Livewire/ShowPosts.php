<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;


class ShowPosts extends Component
{
    public $posts, $title, $slug ,$image, $body, $post_id, $meta_description, $meta_keyword ;

    public function mount($id)
    {
        $this->posts = Post::find($id);
    }

}

