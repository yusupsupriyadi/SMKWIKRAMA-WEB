<?php

namespace App\Http\Livewire\Backend\Jurusan\Tbg;

use App\Tbg;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $updatesQueryString = ['search'];
    public function destroy($id)
    {
        $post = Tbg::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('tbg.index');
    }
    public function render()
    {
        return view('livewire.backend.jurusan.tbg.index', [
            'posts' => $this->search === null ? Tbg::latest()->paginate(5) : Tbg::where('berdiri', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
