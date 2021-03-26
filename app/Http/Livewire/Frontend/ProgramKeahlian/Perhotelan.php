<?php

namespace App\Http\Livewire\Frontend\ProgramKeahlian;

use App\Hotel;
use Livewire\Component;

class Perhotelan extends Component
{
    public function render()
    {
        return view('livewire.frontend.program-keahlian.perhotelan',[
            'posts' => Hotel::all()
        ]);
    }
}
