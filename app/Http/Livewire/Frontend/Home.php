<?php

namespace App\Http\Livewire\Frontend;

use App\Berita;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        // return view('livewire.frontend.home');
        return view('livewire.frontend.home', [
            'posts' => Berita::all(),
        ]);
    }
}
