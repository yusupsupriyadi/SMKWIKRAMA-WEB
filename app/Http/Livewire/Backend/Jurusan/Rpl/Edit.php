<?php

namespace App\Http\Livewire\Backend\Jurusan\Rpl;

use App\Rpl;
use Livewire\Component;

class Edit extends Component
{
    public $postId, $berdiri, $keahlian, $model_belajar, $cbt, $keunggulan, $sertifikasi, $gambar;

    public function mount($id)
    {
        $post = Rpl::find($id);
        if ($post) {
            $this->postId = $post->id;
            $this->berdiri = $post->berdiri;
            $this->keahlian = $post->keahlian;
            $this->model_belajar = $post->model_belajar;
            $this->keunggulan = $post->keunggulan;
            $this->cbt = $post->cbt;
            $this->sertifikasi = $post->sertifikasi;
            $this->gambar = $post->gambar;
        }
    }

    public function update()
    {
        $post = Rpl::find($this->postId);
        if ($post) {
            $post->update([
                'berdiri' => $this->berdiri,
                'keahlian' => $this->keahlian,
                'model_belajar' => $this->model_belajar,
                'keunggulan' => $this->keunggulan,
                'pohon_kompetensi' => $this->pohon_kompetensi,
                'cbt' => $this->cbt,
                'sertifikasi' => $this->sertifikasi,
                'gambar' => $this->gambar,
            ]);
            session()->flash('success', 'Data Berhasil Diupdate');
            return redirect()->route('rpl.index');
        }
    }
    public function render()
    {
        return view('livewire.backend.jurusan.rpl.edit');
    }
}
