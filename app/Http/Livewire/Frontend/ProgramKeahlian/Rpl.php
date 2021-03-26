<?php

namespace App\Http\Livewire\Frontend\ProgramKeahlian;

use App\Rpl as AppRpl;
use Livewire\Component;

class Rpl extends Component
{
    public function render()
    {
        return view('livewire.frontend.program-keahlian.rpl',[
            'posts' => AppRpl::all()
        ]);
    }
}
