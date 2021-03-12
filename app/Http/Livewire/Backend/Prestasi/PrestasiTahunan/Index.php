<?php

namespace App\Http\Livewire\Backend\Prestasi\PrestasiTahunan;

use App\Prestasitahunan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = ['search'];

    public function destroy($id)
    {

        $post = Prestasitahunan::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('prestasi-tahunan.index');
    }

    public function render()
    {
        return view('livewire.backend.prestasi.prestasi-tahunan.index', [
            'posts' => $this->search === null ? Prestasitahunan::latest()->paginate(5) : Prestasitahunan::where('tanggal', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
