<?php

namespace App\Http\Livewire\Frontend\DiscoverWikrama;

use App\SchoolAlliance as AppSchoolAlliance;
use Livewire\Component;

class SchoolAlliance extends Component
{
    public function render()
    {
        return view('livewire.frontend.discover-wikrama.school-alliance',[
            'posts' => AppSchoolAlliance::all()
        ]);
    }
}
