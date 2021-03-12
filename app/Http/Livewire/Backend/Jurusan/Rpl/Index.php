<?php

namespace App\Http\Livewire\Backend\Jurusan\Rpl;

use App\Rpl;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $updatesQueryString = ['search'];
    public function destroy($id)
    {
        $post = Rpl::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('rpl.index');
    }
    public function render()
    {
        return view('livewire.backend.jurusan.rpl.index', [
            'posts' => $this->search === null ? Rpl::latest()->paginate(5) : Rpl::where('berdiri', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
