<?php

namespace App\Http\Livewire\Backend\Testimoni\Testimoniperusahaan;

use App\Testimoniperusahaan;
use Livewire\Component;

class Edit extends Component
{
    public $postId, $nama_pt, $atas_nama, $jabatan, $testimoni;

    public function mount($id)
    {
        $post = Testimoniperusahaan::find($id);
        if ($post) {
            $this->postId = $post->id;
            $this->nama_pt = $post->nama_pt;
            $this->atas_nama = $post->atas_nama;
            $this->jabatan = $post->jabatan;
            $this->testimoni = $post->testimoni;
        }
    }

    public function update()
    {
        $post = Testimoniperusahaan::find($this->postId);
        if ($post) {
            $post->update([
                'nama_pt' => $this->nama_pt,
                'atas_nama' => $this->atas_nama,
                'jabatan' => $this->jabatan,
                'testimoni' => $this->testimoni,
            ]);
            session()->flash('success', 'Data Berhasil Diupdate');
            return redirect()->route('testimoniperusahaan.index');
        }
    }
    public function render()
    {
        return view('livewire.backend.testimoni.testimoniperusahaan.edit');
    }
}
