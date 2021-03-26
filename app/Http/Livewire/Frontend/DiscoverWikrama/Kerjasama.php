<?php

namespace App\Http\Livewire\Frontend\DiscoverWikrama;

use App\Ptkerjasama;
use Livewire\Component;
use Livewire\WithPagination;

class Kerjasama extends Component
{ 
    use WithPagination;
    public function render()
    {
        return view('livewire.frontend.discover-wikrama.kerjasama', [
            'posts' => Ptkerjasama::all(),
        ]);
    }

}
