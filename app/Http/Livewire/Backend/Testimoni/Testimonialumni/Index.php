<?php

namespace App\Http\Livewire\Backend\Testimoni\Testimonialumni;

use App\Testimonialumni;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = ['search'];

    public function destroy($id)
    {

        $post = Testimonialumni::find($id);
        $post->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('testimonialumni.index');
    }
    public function render()
    {
        return view('livewire.backend.testimoni.testimonialumni.index', [
            'posts' => $this->search === null ? Testimonialumni::latest()->paginate(5) : Testimonialumni::where('nama', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
