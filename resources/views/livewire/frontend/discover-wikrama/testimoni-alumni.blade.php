<div>
    <section class="pt-32 pb-2 px-4 text-center " style="background-color: #FFD700">
    <h1 class="mb-3 font-bold text-white">Testimoni Alumni</h1>
    <h5 class="mb-3 text-white px-md-5 px-0"></h5>
    <a class="rounded-xl py-2 px-4 bg-blue-600 text-white font-bold" href="https://ppdb.smkwikrama.sch.id" role="button">Daftar</a>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFD700" fill-opacity="1" d="M0,64L120,101.3C240,139,480,213,720,208C960,203,1200,117,1320,74.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
  <div class="container">
      {{ $posts->links() }}
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($posts as $post)
        <div class="col">
            <div class="card h-100" data-aos="zoom-in" data-aos-duration="2000">
                <div class="card-body shadow">
                    <h4 class="text-center">{{ $post->nama }}</h4>
                    <h6 class="text-center">{{ $post->jurusan }}</h6>
                    <h6 class="text-center">{{ $post->angkatan }}</h6>
                    <p class="card-text"><i class="fas fa-quote-left"></i> {{ $post->testimoni }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>

