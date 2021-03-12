<?php

namespace App\Http\Livewire\Frontend\DiscoverWikrama;

use App\Testimoniperusahaan as AppTestimoniperusahaan;
use Livewire\Component;

class TestimoniPerusahaan extends Component
{
    public function render()
    {
        return view('livewire.frontend.discover-wikrama.testimoni-perusahaan', [
            'posts' => AppTestimoniperusahaan::all(),
        ]);
    }
}
