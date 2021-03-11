<?php

namespace App\Http\Livewire\Backend\Prestasi\Prestasi;

use App\Prestasi;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = ['search'];

    public function destroy($id)
    {
        
        $post = Prestasi::find($id);
            $post->delete();
            session()->flash('success', 'Data Berhasil Dihapus');
            return redirect()->route('prestasi.index');
    }

    public function render()
    {
        return view('livewire.backend.prestasi.prestasi.index', [
            'posts' => $this->search === null ? Prestasi::latest()->paginate(5) : Prestasi::where('tanggal', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
