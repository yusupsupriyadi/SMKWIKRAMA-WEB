<?php

namespace App\Http\Livewire\Frontend\ProgramKeahlian;

use App\Otkp as AppOtkp;
use Livewire\Component;

class Otkp extends Component
{
    public function render()
    {
        return view('livewire.frontend.program-keahlian.otkp',[
            'posts' => AppOtkp::all()
        ]);
    }
}
