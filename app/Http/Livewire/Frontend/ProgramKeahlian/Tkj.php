<?php

namespace App\Http\Livewire\Frontend\ProgramKeahlian;

use App\Tkj as AppTkj;
use Livewire\Component;

class Tkj extends Component
{
    public function render()
    {
        return view('livewire.frontend.program-keahlian.tkj',[
            'posts' => AppTkj::all()
        ]);
    }
}
