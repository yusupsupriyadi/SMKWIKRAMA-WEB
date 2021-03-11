@section('back')
    <a class="btn btn-primary font-bold" href="{{ route('testimoniperusahaan.index') }}">back</a>
@endsection
@section('title')
    <h1 class="font-semibold text-yellow-600">DATA TESTIMONI PERUSAHAAN</h1>
@endsection
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4 rounded-2xl border-black border-t-2 border-r-2 border-l-2 border-b-8 shadow-xl">
                <form wire:submit.prevent="update">
                    <input type="hidden" wire:model="postId">
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input class="form-control border-2 @error('nama_pt') is-invalid @enderror" type="text" wire:model="nama_pt" placeholder="Nama Perusahaan">
                        @error('nama_pt')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Atas Nama</label>
                        <input class="form-control border-2 @error('atas_nama') is-invalid @enderror" type="text" wire:model="atas_nama" placeholder="Atas Nama">
                        @error('atas_nama')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input class="form-control border-2 @error('jabatan') is-invalid @enderror" type="text" wire:model="jabatan" placeholder="Jabatan">
                        @error('jabatan')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Testimoni</label>
                        <textarea class="form-control border-2 @error('testimoni') is-invalid @enderror" type="text" wire:model="testimoni" placeholder="Testimoni"></textarea>
                        @error('testimoni')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-success ">Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

