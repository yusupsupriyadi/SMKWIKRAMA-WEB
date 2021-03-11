<?php

namespace App\Http\Livewire\Backend\Discover\Schoolalliance;

use App\SchoolAlliance;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $updatesQueryString = ['search'];
    public function destroy($id)
    {

        $post = SchoolAlliance::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('schoolalliance.index');
    }
    public function render()
    {
        return view('livewire.backend.discover.schoolalliance.index', [
            'posts' => $this->search === null ? Schoolalliance::latest()->paginate(5) : Schoolalliance::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
