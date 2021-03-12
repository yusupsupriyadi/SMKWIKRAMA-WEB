<?php

namespace App\Http\Livewire\Frontend\Campus;

use App\Berita as AppBerita;
use Livewire\Component;

class Berita extends Component
{
    public function render()
    {
        return view('livewire.frontend.campus.berita', [
            'posts' => AppBerita::all(),
        ]);
    }
}
