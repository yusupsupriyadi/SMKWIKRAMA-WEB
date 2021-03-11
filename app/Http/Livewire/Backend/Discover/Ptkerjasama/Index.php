<?php

namespace App\Http\Livewire\Backend\Discover\Ptkerjasama;

use App\Ptkerjasama;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = ['search'];

    public function destroy($id)
    {

        $post = Ptkerjasama::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('ptkerjasama.index');
    }
    public function render()
    {
        return view('livewire.backend.discover.ptkerjasama.index', [
            'posts' => $this->search === null ? Ptkerjasama::latest()->paginate(5) : Ptkerjasama::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
