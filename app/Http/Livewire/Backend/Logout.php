<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
    public function render()
    {
        return view('livewire.backend.logout');
    }
}
