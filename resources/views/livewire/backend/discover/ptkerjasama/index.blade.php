@section('title')
    <h1 class="font-semibold text-yellow-600">DATA PERUSAAN KERJASAMA</h1>
@endsection
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="bg-white p-4 rounded-2xl border-black border-l-2 border-r-2 border-t-2 border-b-8 shadow-xl">
                    <dir class="grid grid-cols-2 gap-4 ">
                        <div>
                            <a href="{{ route('ptkerjasama.create') }}" class="btn btn-primary">Tambah</a>
                        </div>
                        <div>
                            <input class="form-control" type="text" wire:model="search" placeholder="Search ..">
                        </div>
                    </dir>
                
                <table class="table table-bordered mt-2">
                    <thead class="bg-yellow-600 rounded-lg">
                        <tr>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->name }}</td>
                                <td>
                                    <a href="{{ route('ptkerjasama.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                                    <button wire:click="destroy({{ $post->id }})" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
