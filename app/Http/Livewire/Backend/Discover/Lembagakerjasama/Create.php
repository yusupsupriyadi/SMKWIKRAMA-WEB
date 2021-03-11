<?php

namespace App\Http\Livewire\Backend\Discover\Lembagakerjasama;

use App\Lembagakerjasama;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public function store()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $post = Lembagakerjasama::create([
            'name' => $this->name,
        ]);

        session()->flash('success', 'Data Berhasil Di Simpan');
        return redirect()->route('lembagakerjasama.index');
    }
    public function render()
    {
        return view('livewire.backend.discover.lembagakerjasama.create');
    }
}
