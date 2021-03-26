<?php

namespace App\Http\Livewire\Backend\Discover\Schoolalliance;

use App\SchoolAlliance;
use Livewire\Component;

class Edit extends Component
{
    public $postId, $name, $tanggal_berdiri, $yayasan, $kepala_sekolah, $alamat, $email, $website, $no_telp, $gambar;

    public function mount($id)
    {
        $post = Schoolalliance::find($id);
        if ($post) {
            $this->postId = $post->id;
            $this->name = $post->name;
            $this->gambar = $post->gambar;
            $this->tanggal_berdiri = $post->tanggal_berdiri;
            $this->yayasan = $post->yayasan;
            $this->kepala_sekolah = $post->kepala_sekolah;
            $this->alamat = $post->alamat;
            $this->email = $post->email;
            $this->website = $post->website;
            $this->no_telp = $post->no_telp;
        }
    }

    public function update()
    {
        $post = SchoolAlliance::find($this->postId);
        if ($post) {
            $post->update([
                'name' => $this->name,
                'tanggal_berdiri' => $this->tanggal_berdiri,
                'yayasan' => $this->yayasan,
                'kepala_sekolah' => $this->kepala_sekolah,
                'alamat' => $this->alamat,
                'email' => $this->email,
                'website' => $this->website,
                'no_telp' => $this->no_telp,
                'gambar' => $this->gambar,
            ]);
            session()->flash('success', 'Data Berhasil Diupdate');
            return redirect()->route('schoolalliance.index');
        }
    }
    public function render()
    {
        return view('livewire.backend.discover.schoolalliance.edit');
    }
}
