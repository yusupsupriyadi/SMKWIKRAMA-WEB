@section('back')
    <a class="btn btn-primary font-bold" href="{{ route('berita.index') }}">back</a>
@endsection
@section('title')
    <h1 class="font-semibold text-yellow-600">DATA BERITA</h1>
@endsection
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4 rounded-2xl border-black border-t-2 border-r-2 border-l-2 border-b-8 shadow-xl">
                <form wire:submit.prevent="store">
                    <div class="form-group">
                        <label>Gambar</label>
                        <input class="form-control border-2 @error('gambar') is-invalid @enderror" type="file" wire:model="gambar" placeholder="Gambar">
                        @error('gambar')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control border-2 @error('judul') is-invalid @enderror" type="text" wire:model="judul" placeholder="Judul">
                        @error('judul')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input class="form-control border-2 @error('content') is-invalid @enderror" type="text" wire:model="content" placeholder="Content">
                        @error('content')
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

