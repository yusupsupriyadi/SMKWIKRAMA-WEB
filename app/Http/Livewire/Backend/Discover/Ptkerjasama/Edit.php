<?php

namespace App\Http\Livewire\Backend\Discover\Ptkerjasama;

use App\Ptkerjasama;
use Livewire\Component;

class Edit extends Component
{
    public $postId, $name;

    public function mount($id)
    {
        $post = Ptkerjasama::find($id);
        if ($post) {
            $this->postId = $post->id;
            $this->name = $post->name;
        }
    }

    public function update()
    {
        $post = Ptkerjasama::find($this->postId);
        if ($post) {
            $post->update([
                'name' => $this->name,
            ]);
            session()->flash('success', 'Data Berhasil Diupdate');
            return redirect()->route('ptkerjasama.index');
        }
    }
    public function render()
    {
        return view('livewire.backend.discover.ptkerjasama.edit');
    }
}
