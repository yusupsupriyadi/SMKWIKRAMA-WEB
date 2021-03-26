<?php

namespace App\Http\Livewire\Backend\Berita;

use App\Berita;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $gambar, $judul, $content;
    public function store()
    {
        $this->validate([
            'gambar' => 'image|max:1024',
            'judul' => 'required',
            'content' => 'required',
        ]);

        $post = Berita::create([
            'gambar' => $this->gambar->hashName(),
            'judul' => $this->judul,
            'content' => $this->content,
        ]);
        if (!empty($this->gambar)) {
            $this->gambar->store('public/photo');
        }
        session()->flash('success', 'Data Berhasil Di Simpan');
        return redirect()->route('berita.index');
    }
    public function render()
    {
        return view('livewire.backend.berita.create');
    }
}
