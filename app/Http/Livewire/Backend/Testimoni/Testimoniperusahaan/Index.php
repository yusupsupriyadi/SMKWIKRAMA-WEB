<?php

namespace App\Http\Livewire\Backend\Testimoni\Testimoniperusahaan;

use App\Testimoniperusahaan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = ['search'];

    public function destroy($id)
    {

        $post = Testimoniperusahaan::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('testimoniperusahaan.index');
    }
    public function render()
    {
        return view('livewire.backend.testimoni.Testimoniperusahaan.index', [
            'posts' => $this->search === null ? Testimoniperusahaan::latest()->paginate(5) : Testimoniperusahaan::where('nama_pt', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
