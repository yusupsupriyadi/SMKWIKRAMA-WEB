@section('back')
    <a class="btn btn-primary font-bold" href="{{ route('lembagakerjasama.index') }}">back</a>
@endsection
@section('title')
    <h1 class="font-semibold text-yellow-600">DATA lembagakerjasama</h1>
@endsection
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4 rounded-2xl border-black border-t-2 border-r-2 border-l-2 border-b-8 shadow-xl">
                <form wire:submit.prevent="store">
                    <div class="form-group">
                        <label>name</label>
                        <input class="form-control border-2 @error('name') is-invalid @enderror" type="text" wire:model="name" placeholder="name">
                        @error('name')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-success ">Simpan</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

