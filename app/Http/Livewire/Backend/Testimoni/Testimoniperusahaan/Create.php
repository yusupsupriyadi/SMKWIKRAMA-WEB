<?php

namespace App\Http\Livewire\Backend\Testimoni\Testimoniperusahaan;

use App\Testimoniperusahaan;
use Livewire\Component;

class Create extends Component
{
    public $nama_pt, $atas_nama, $jabatan, $testimoni;
    public function store()
    {
        $this->validate([
            'nama_pt' => 'required',
            'atas_nama' => 'required',
            'jabatan' => 'required',
            'testimoni' => 'required',
        ]);

        $post = Testimoniperusahaan::create([
            'nama_pt' => $this->nama_pt,
            'atas_nama' => $this->atas_nama,
            'jabatan' => $this->jabatan,
            'testimoni' => $this->testimoni,
        ]);

        session()->flash('success', 'Data Berhasil Di Simpan');
        return redirect()->route('testimoniperusahaan.index');
    }
    public function render()
    {
        return view('livewire.backend.testimoni.testimoniperusahaan.create');
    }
}
