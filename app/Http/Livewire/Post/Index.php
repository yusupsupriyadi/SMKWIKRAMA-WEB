<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = [ 'search' ];

    public function destroy($id)
    {
        $post = Post::find($id);
        if($post){
            $post->delete();
            session()->flash('success', 'Data Berhasil Dihapus');
            return redirect()->route('post.index');
        }
        
    }

    public function render()
    {


        return view('livewire.post.index', [
            'posts' => $this->search === null ? Post::latest()->paginate(5) : Post::where('title', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
