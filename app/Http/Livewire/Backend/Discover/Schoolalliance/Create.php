<?php

namespace App\Http\Livewire\Backend\Discover\Schoolalliance;

use App\SchoolAlliance;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $name,$tanggal_berdiri,$yayasan,$kepala_sekolah,$alamat,$email,$website,$no_telp,$gambar;
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'tanggal_berdiri' => 'required',
            'yayasan' => 'required',
            'kepala_sekolah' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'website' => 'required',
            'no_telp' => 'required',
            'gambar' => 'required',
        ]);

        $post = SchoolAlliance::create([
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
        
        session()->flash('success', 'Data Berhasil Di Simpan');
        return redirect()->route('schoolalliance.index');
    }
    public function render()
    {
        return view('livewire.backend.discover.schoolalliance.create');
    }
}
