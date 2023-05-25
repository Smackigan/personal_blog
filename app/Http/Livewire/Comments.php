<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Comments extends Component
{
    public Post $post;
    public Collection $comments;

    protected $listeners = [
        'commentCreated' => 'commentCreated'
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->comments = Comment::where('post_id', '=', $this->post->id)->orderByDesc('created_at')->get();
    }

    public function render()
    {
        return view('livewire.comments');
    }

    public function commentCreated(int $id)
    {
        $comment = Comment::where('id', '=', $id)->first();
        $this->comments = $this->comments->prepend($comment);
    }
}

