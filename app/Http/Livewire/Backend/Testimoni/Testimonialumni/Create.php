<?php

namespace App\Http\Livewire\Backend\Testimoni\Testimonialumni;

use App\Testimonialumni;
use Livewire\Component;

class Create extends Component
{
    public $nama,$angkatan,$jurusan,$tempat_kerja,$jabatan,$testimoni;
    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'angkatan' => 'required',
            'jurusan' => 'required',
            'tempat_kerja' => 'required',
            'jabatan' => 'required',
            'testimoni' => 'required',
        ]);

        $post = Testimonialumni::create([
            'nama' => $this->nama,
            'angkatan' => $this->angkatan,
            'jurusan' => $this->jurusan,
            'tempat_kerja' => $this->tempat_kerja,
            'jabatan' => $this->jabatan,
            'testimoni' => $this->testimoni,
        ]);

        session()->flash('success', 'Data Berhasil Di Simpan');
        return redirect()->route('testimonialumni.index');
    }
    public function render()
    {
        return view('livewire.backend.testimoni.testimonialumni.create');
    }
}
