<div>
    <div>
  <section class="pt-32 pb-2 px-4 text-center " style="background-color: #FFD700">
    <h1 class="mb-3 font-bold text-white">Berita</h1>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFD700" fill-opacity="1" d="M0,64L120,101.3C240,139,480,213,720,208C960,203,1200,117,1320,74.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
</div>
    <section>
        <div class="container pt-4">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($posts as $post)
                <div class="col">
                    <div class="card h-96">
                        <img width="300px" src="{{ url('storage/photo/'. $post->gambar) }}">
                        <div class="card-body">
                            <h2 class="card-title font-bold text-md">{{ $post->judul }}</h2>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{ $post->updated_at }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
