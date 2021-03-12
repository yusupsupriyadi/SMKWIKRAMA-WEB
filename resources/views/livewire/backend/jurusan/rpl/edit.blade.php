@section('back')
    <a class="btn btn-primary font-bold" href="{{ route('rpl.index') }}">back</a>
@endsection
@section('title')
    <h1 class="font-semibold text-yellow-600">DATA JURUSAN Rekayasa Perangkat Lunak</h1>
@endsection
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4 rounded-2xl border-black border-t-2 border-r-2 border-l-2 border-b-8 shadow-xl">
                <form wire:submit.prevent="update">
                    <input type="hidden" wire:model="postId">
                    <div class="form-group">
                        <label>berdiri</label>
                        <textarea class="form-control border-2 @error('berdiri') is-invalid @enderror" type="text" wire:model="berdiri" placeholder="berdiri"></textarea>
                        @error('berdiri')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>keahlian</label>
                        <textarea class="form-control border-2 @error('keahlian') is-invalid @enderror" type="text" wire:model="keahlian" placeholder="keahlian"></textarea>
                        @error('keahlian')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>model belajar</label>
                        <textarea class="form-control border-2 @error('model_belajar') is-invalid @enderror" type="text" wire:model="model_belajar" placeholder="model belajar"></textarea>
                        @error('model_belajar')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>cbt</label>
                        <textarea class="form-control border-2 @error('cbt') is-invalid @enderror" type="text" wire:model="cbt" placeholder="cbt"></textarea>
                        @error('cbt')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>keunggulan</label>
                        <textarea class="form-control border-2 @error('keunggulan') is-invalid @enderror" type="text" wire:model="keunggulan" placeholder="keunggulan"></textarea>
                        @error('keunggulan')
                        <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>sertifikasi</label>
                        <textarea class="form-control border-2 @error('sertifikasi') is-invalid @enderror" type="text" wire:model="sertifikasi" placeholder="sertifikasi"></textarea>
                        @error('sertifikasi')
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

