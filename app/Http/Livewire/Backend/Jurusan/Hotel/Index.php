<?php

namespace App\Http\Livewire\Backend\Jurusan\Hotel;

use App\Hotel;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $updatesQueryString = ['search'];
    public function destroy($id)
    {
        $post = Hotel::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('hotel.index');
    }
    public function render()
    {
        return view('livewire.backend.jurusan.hotel.index', [
            'posts' => $this->search === null ? Hotel::latest()->paginate(5) : Hotel::where('berdiri', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
