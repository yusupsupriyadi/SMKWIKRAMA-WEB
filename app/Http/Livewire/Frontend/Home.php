<?php

namespace App\Http\Livewire\Frontend;

use App\Berita;
use App\Testimonialumni;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.frontend.home', [
            'posts' => Berita::paginate(4), 
            'items' => Testimonialumni::all(),
        ]);
    }
}
