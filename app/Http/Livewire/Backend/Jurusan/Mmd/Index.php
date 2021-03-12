<?php

namespace App\Http\Livewire\Backend\Jurusan\Mmd;

use App\Mmd;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $updatesQueryString = ['search'];
    public function destroy($id)
    {
        $post = Mmd::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('mmd.index');
    }
    public function render()
    {
        return view('livewire.backend.jurusan.mmd.index', [
            'posts' => $this->search === null ? Mmd::latest()->paginate(5) : Mmd::where('berdiri', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
