<?php

namespace App\Http\Livewire\Backend\Jurusan\Hotel;

use App\Hotel;
use Livewire\Component;

class Edit extends Component
{
    public $postId, $berdiri, $keahlian, $model_belajar, $cbt, $keunggulan, $sertifikasi, $gambar;

    public function mount($id)
    {
        $post = Hotel::find($id);
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
        $post = Hotel::find($this->postId);
        if ($post) {
            $post->update([
                'berdiri' => $this->berdiri,
                'keahlian' => $this->keahlian,
                'keunggulan' => $this->keunggulan,
                'cbt' => $this->cbt,
                'sertifikasi' => $this->sertifikasi,
                'gambar' => $this->gambar,
            ]);
            session()->flash('success', 'Data Berhasil Diupdate');
            return redirect()->route('hotel.index');
        }
    }
    public function render()
    {
        return view('livewire.backend.jurusan.hotel.edit');
    }
}
