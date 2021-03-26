@section('back')
    <a class="btn btn-primary font-bold" href="{{ route('schoolalliance.index') }}">back</a>
@endsection
@section('title')
    <h1 class="font-semibold text-yellow-600">DATA SCHOOL ALLIANCE</h1>
@endsection
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4 rounded-2xl border-black border-t-2 border-r-2 border-l-2 border-b-8 shadow-xl">
                <form wire:submit.prevent="update">
                    <input type="hidden" wire:model="postId">
                    <div class="form-group">
                        <label>name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" wire:model="name" placeholder="Name">
                        @error('name')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>TANGGAL BERDIRI</label>
                        <input class="form-control @error('tanggal_berdiri') is-invalid @enderror" type="text" wire:model="tanggal_berdiri" placeholder="Tanggal berdiri">
                        @error('tanggal_berdiri')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>YAYASAN</label>
                        <input class="form-control @error('yayasan') is-invalid @enderror" type="text" wire:model="yayasan" placeholder="Yayasan">
                        @error('yayasan')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>KEPALA SEKOLAH</label>
                        <input class="form-control @error('kepala_sekolah') is-invalid @enderror" type="text" wire:model="kepala_sekolah" placeholder="Kepala Sekolah">
                        @error('kepala_sekolah')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>ALAMAT</label>
                        <input class="form-control @error('alamat') is-invalid @enderror" type="text" wire:model="alamat" placeholder="Alamat">
                        @error('alamat')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="text" wire:model="email" placeholder="Email">
                        @error('email')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>WEBSITE</label>
                        <input class="form-control @error('website') is-invalid @enderror" type="text" wire:model="website" placeholder="Website">
                        @error('website')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>NO TELPHONE</label>
                        <input class="form-control @error('no_telp') is-invalid @enderror" type="text" wire:model="no_telp" placeholder="No Telphone">
                        @error('no_telp')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>IMAGE URL</label>
                        <input class="form-control @error('no_telp') is-invalid @enderror" type="text" wire:model="gambar" placeholder="Image Url">
                        @error('gambar')
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

