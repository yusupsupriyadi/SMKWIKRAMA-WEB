<?php

namespace App\Http\Livewire\Frontend\ProgramKeahlian;

use App\Bdp as AppBdp;
use Livewire\Component;

class Bdp extends Component
{
    public function render()
    {
        return view('livewire.frontend.program-keahlian.bdp',[
            'posts' => AppBdp::all()
        ]);
    }
}
