<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;

class Edit extends Component
{
    public $postId,$title,$content;

    public function mount($id)
    {
        $post = Post::find($id);
        if($post){
            $this->postId = $post->id;
            $this->title = $post->title;
            $this->content = $post->content;
        }
    }

    public function update()
    {
        $post = Post::find($this->postId);
        if($post){
            $post->update([
                'title' => $this->title,
                'content' => $this->content,
            ]);
            session()->flash('success', 'Data Berhasil Diupdate');
            return redirect()->route('post.index');
        }
    }
    public function render()
    {
        return view('livewire.post.edit');
    }
}
