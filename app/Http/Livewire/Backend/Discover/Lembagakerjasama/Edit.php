<?php

namespace App\Http\Livewire\Backend\Discover\Lembagakerjasama;

use App\Lembagakerjasama;
use Livewire\Component;

class Edit extends Component
{
    public $postId, $name;

    public function mount($id)
    {
        $post = Lembagakerjasama::find($id);
        if ($post) {
            $this->postId = $post->id;
            $this->name = $post->name;
        }
    }

    public function update()
    {
        $post = Lembagakerjasama::find($this->postId);
        if ($post) {
            $post->update([
                'name' => $this->name,
            ]);
            session()->flash('success', 'Data Berhasil Diupdate');
            return redirect()->route('lembagakerjasama.index');
        }
    }

    public function render()
    {
        return view('livewire.backend.discover.lembagakerjasama.edit');
    }
}
