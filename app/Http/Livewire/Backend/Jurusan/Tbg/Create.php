<?php

namespace App\Http\Livewire\Backend\Jurusan\Tbg;

use App\Tbg;
use Livewire\Component;

class Create extends Component
{
    public $berdiri, $keahlian, $model_belajar,$cbt, $keunggulan, $sertifikasi, $gambar;
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

        $post = Tbg::create([
            'berdiri' => $this->berdiri,
            'keahlian' => $this->keahlian,
            'model_belajar' => $this->model_belajar,
            'keunggulan' => $this->keunggulan,
            'cbt' => $this->cbt,
            'sertifikasi' => $this->sertifikasi,
            'gambar' => $this->gambar,
        ]);

        session()->flash('success', 'Data Berhasil Di Simpan');
        return redirect()->route('tbg.index');
    }
    public function render()
    {
        return view('livewire.backend.jurusan.tbg.create');
    }
}
