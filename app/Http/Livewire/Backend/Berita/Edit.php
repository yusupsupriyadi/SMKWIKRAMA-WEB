<?php

namespace App\Http\Livewire\Backend\Berita;

use App\Berita;
use Livewire\Component;

class Edit extends Component
{
    
    public $postId, $gambar, $judul, $content;

    public function mount($id)
    {
        $post = Berita::find($id);
        if ($post) {
            $this->postId = $post->id;
            $this->gambar = $post->gambar;
            $this->judul = $post->judul;
            $this->content = $post->content;
        }
    }

    public function update()
    {
        $post = Berita::find($this->postId);
        if ($post) {
            $post->update([
                'gambar' => $this->gambar,
                'judul' => $this->judul,
                'content' => $this->content,
            ]);
            session()->flash('success', 'Data Berhasil Diupdate');
            return redirect()->route('berita.index');
        }
    }
    public function render()
    {
        return view('livewire.backend.berita.edit');
    }
}
