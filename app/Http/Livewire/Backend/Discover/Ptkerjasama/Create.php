<?php

namespace App\Http\Livewire\Backend\Discover\Ptkerjasama;

use App\Ptkerjasama;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public function store()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $post = Ptkerjasama::create([
            'name' => $this->name,
        ]);

        session()->flash('success', 'Data Berhasil Di Simpan');
        return redirect()->route('ptkerjasama.index');
    }
    public function render()
    {
        return view('livewire.backend.discover.ptkerjasama.create');
    }
}
