<?php

namespace App\Http\Livewire\Backend\Prestasi\Penghargaan;

use App\Penghargaan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = ['search'];

    public function destroy($id)
    {

        $post = Penghargaan::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('penghargaan.index');
    }

    public function render()
    {
        return view('livewire.backend.prestasi.penghargaan.index',[
            'posts' => $this->search === null ? Penghargaan::latest()->paginate(5) : Penghargaan::where('tanggal', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
