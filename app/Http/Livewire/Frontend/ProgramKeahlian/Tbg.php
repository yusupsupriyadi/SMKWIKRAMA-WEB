<?php

namespace App\Http\Livewire\Frontend\ProgramKeahlian;

use App\Tbg as AppTbg;
use Livewire\Component;

class Tbg extends Component
{
    public function render()
    {
        return view('livewire.frontend.program-keahlian.tbg',[
            'posts' => AppTbg::all()
        ]);
    }
}
