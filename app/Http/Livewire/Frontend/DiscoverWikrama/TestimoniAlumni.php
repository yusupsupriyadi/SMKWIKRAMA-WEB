<?php

namespace App\Http\Livewire\Frontend\DiscoverWikrama;

use App\Testimonialumni as AppTestimonialumni;
use Livewire\Component;

class TestimoniAlumni extends Component
{
    public function render()
    {
        return view('livewire.frontend.discover-wikrama.testimoni-alumni', [
            'posts' => AppTestimonialumni::all(),
        ]);
    }
}
