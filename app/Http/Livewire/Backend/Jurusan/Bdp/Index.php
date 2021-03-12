<?php

namespace App\Http\Livewire\Backend\Jurusan\Bdp;

use App\Bdp;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $updatesQueryString = ['search'];
    public function destroy($id)
    {
        $post = Bdp::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('bdp.index');
    }
    public function render()
    {
        return view('livewire.backend.jurusan.bdp.index', [
            'posts' => $this->search === null ? Bdp::latest()->paginate(5) : Bdp::where('berdiri', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
