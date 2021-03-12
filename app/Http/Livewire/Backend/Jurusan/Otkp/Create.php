<?php

namespace App\Http\Livewire\Backend\Jurusan\Otkp;

use App\Otkp;
use Livewire\Component;

class Create extends Component
{
    public $berdiri, $keahlian, $model_belajar, $cbt, $keunggulan, $sertifikasi, $gambar;
    public function store()
    {
        $this->validate([
            'berdiri' => 'required',
            'keahlian' => 'required',
            'model_belajar' => 'required',
            'keunggulan' => 'required',
            'cbt' => 'required',
            'sertifikasi' => 'required',
        ]);

        $post = Otkp::create([
            'berdiri' => $this->berdiri,
            'keahlian' => $this->keahlian,
            'model_belajar' => $this->model_belajar,
            'keunggulan' => $this->keunggulan,
            'cbt' => $this->cbt,
            'sertifikasi' => $this->sertifikasi,
            'gambar' => $this->gambar,
        ]);

        session()->flash('success', 'Data Berhasil Di Simpan');
        return redirect()->route('otkp.index');
    }
    public function render()
    {
        return view('livewire.backend.jurusan.otkp.create');
    }
}
