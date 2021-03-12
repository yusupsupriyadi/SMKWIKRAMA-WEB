<div>
    <div>
  <section class="pt-32 pb-2 px-4 text-center " style="background-color: #FFD700">
    <h1 class="mb-3 font-bold text-white">Berita</h1>
    <h5 class="mb-3 text-white px-md-5 px-0"></h5>
    <a class="rounded-xl py-2 px-4 bg-blue-600 text-white font-bold" href="https://ppdb.smkwikrama.sch.id" role="button">Daftar</a>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFD700" fill-opacity="1" d="M0,64L120,101.3C240,139,480,213,720,208C960,203,1200,117,1320,74.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
</div>
    <section>
        <div class="container pt-4">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($posts as $post)
                <div class="col">
                    <div class="card h-100">
                        <img width="100px" src="{{ url('storage/photo/'. $post->gambar) }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->judul }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
