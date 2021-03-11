<?php

namespace App\Http\Livewire\Backend\Berita;

use App\Berita;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = ['search'];

    public function destroy($id)
    {

        $post = Berita::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('berita.index');
    }
    public function render()
    {
        return view('livewire.backend.berita.index', [
            'posts' => $this->search === null ? Berita::latest()->paginate(5) : Berita::where('judul', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
