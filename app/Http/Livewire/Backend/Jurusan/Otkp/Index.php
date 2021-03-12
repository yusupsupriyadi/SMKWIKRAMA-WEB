<?php

namespace App\Http\Livewire\Backend\Jurusan\Otkp;

use App\Otkp;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $updatesQueryString = ['search'];
    public function destroy($id)
    {
        $post = Otkp::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('otkp.index');
    }
    public function render()
    {
        return view('livewire.backend.jurusan.otkp.index', [
            'posts' => $this->search === null ? Otkp::latest()->paginate(5) : Otkp::where('berdiri', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
