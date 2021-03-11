<?php

namespace App\Http\Livewire\Backend\Testimoni\Testimonialumni;

use App\Testimonialumni;
use Livewire\Component;

class Edit extends Component
{
    public $postId, $nama, $angkatan, $jurusan, $tempat_kerja, $jabatan, $testimoni;

    public function mount($id)
    {
        $post = Testimonialumni::find($id);
        if ($post) {
            $this->postId = $post->id;
            $this->nama = $post->nama;
            $this->angkatan = $post->angkatan;
            $this->jurusan = $post->jurusan;
            $this->tempat_kerja = $post->tempat_kerja;
            $this->jabatan = $post->jabatan;
            $this->testimoni = $post->testimoni;
        }
    }

    public function update()
    {
        $post = Testimonialumni::find($this->postId);
        if ($post) {
            $post->update([
                'nama' => $this->nama,
                'angkatan' => $this->angkatan,
                'jurusan' => $this->jurusan,
                'tempat_kerja' => $this->tempat_kerja,
                'jabatan' => $this->jabatan,
                'testimoni' => $this->testimoni,
            ]);
            session()->flash('success', 'Data Berhasil Diupdate');
            return redirect()->route('testimonialumni.index');
        }
    }
    public function render()
    {
        return view('livewire.backend.testimoni.testimonialumni.edit');
    }
}
