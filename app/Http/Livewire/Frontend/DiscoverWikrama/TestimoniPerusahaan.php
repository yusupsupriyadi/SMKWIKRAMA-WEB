<?php

namespace App\Http\Livewire\Frontend\DiscoverWikrama;

use App\Testimoniperusahaan as AppTestimoniperusahaan;
use Livewire\Component;
use Livewire\WithPagination;

class TestimoniPerusahaan extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.frontend.discover-wikrama.testimoni-perusahaan', [
            'posts' => AppTestimoniperusahaan::paginate(9),
        ]);
    }
}
