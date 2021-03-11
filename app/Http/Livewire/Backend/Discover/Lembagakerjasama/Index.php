<?php

namespace App\Http\Livewire\Backend\Discover\Lembagakerjasama;

use App\Lembagakerjasama;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = ['search'];

    public function destroy($id)
    {

        $post = Lembagakerjasama::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('lembagakerjasama.index');
    }
    public function render()
    {
        return view('livewire.backend.discover.lembagakerjasama.index', [
            'posts' => $this->search === null ? Lembagakerjasama::latest()->paginate(5) : Lembagakerjasama::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
