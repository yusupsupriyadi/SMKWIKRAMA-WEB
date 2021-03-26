<?php

namespace App\Http\Livewire\Frontend\DiscoverWikrama;

use App\Testimonialumni as AppTestimonialumni;
use Livewire\Component;
use Livewire\WithPagination;

class TestimoniAlumni extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.frontend.discover-wikrama.testimoni-alumni', [
            'posts' => AppTestimonialumni::paginate(9),
        ]);
    }
}
