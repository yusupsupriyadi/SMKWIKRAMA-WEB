<?php

namespace App\Http\Livewire\Backend\Berita;

use App\Berita;
use Livewire\Component;

class Create extends Component
{
    
    public $gambar, $judul, $content;
    public function store()
    {
        $this->validate([
            'gambar' => 'image|max:1024',
            'judul' => 'required',
            'content' => 'required',
        ]);

        $post = Berita::create([
            'gambar' => $this->gambar,
            'judul' => $this->judul,
            'content' => $this->content,
        ]);
        
        session()->flash('success', 'Data Berhasil Di Simpan');
        return redirect()->route('berita.index');
    }
    public function render()
    {
        return view('livewire.backend.berita.create');
    }
}
