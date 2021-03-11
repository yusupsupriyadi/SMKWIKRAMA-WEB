<?php

namespace App\Http\Livewire\Backend\Prestasi\PrestasiTahunan;

use App\Prestasitahunan;
use Livewire\Component;

class Create extends Component
{
    public $tanggal, $content;
    public function store()
    {
        $this->validate([
            'tanggal' => 'required',
            'content' => 'required',
        ]);

        $post = Prestasitahunan::create([
            'tanggal' => $this->tanggal,
            'content' => $this->content,
        ]);

        session()->flash('success', 'Data Berhasil Di Simpan');
        return redirect()->route('prestasi-tahunan.index');
    }

    public function render()
    {
        return view('livewire.backend.prestasi.prestasi-tahunan.create');
    }
}
