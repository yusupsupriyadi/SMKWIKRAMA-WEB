<?php

namespace App\Http\Livewire\Frontend\ProgramKeahlian;

use App\Mmd as AppMmd;
use Livewire\Component;

class Mmd extends Component
{
    public function render()
    {
        return view('livewire.frontend.program-keahlian.mmd',[
            'posts' => AppMmd::all()
        ]);
    }
}
