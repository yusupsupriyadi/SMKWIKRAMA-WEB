<?php

namespace App\Http\Livewire\Backend\Jurusan\Tkj;

use App\Tkj;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $updatesQueryString = ['search'];
    public function destroy($id)
    {
        $post = Tkj::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('tkj.index');
    }
    public function render()
    {
        return view('livewire.backend.jurusan.tkj.index', [
            'posts' => $this->search === null ? Tkj::latest()->paginate(5) : Tkj::where('berdiri', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
