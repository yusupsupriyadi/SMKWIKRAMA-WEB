<div>
  <section class="pt-32 pb-2 px-4 text-center " style="background-color: #E7008A">
    <h1 class="mb-3 font-bold text-white">Otomatisasi dan Tata Kelola Perkantoran</h1>
    <h5 class="mb-3 text-white px-md-5 px-0">Mengetik cepat dengan teknik 10 jari dengan rata-rata kecepatan 250 EPM 98%, mengelola dokumen dan arsip kantor, menangani telepon, mengelola keuangan dan mampu menangani tamu</h5>
    <a class="rounded-xl py-2 px-4 bg-blue-600 text-white font-bold" href="https://ppdb.smkwikrama.sch.id" role="button">Daftar</a>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E7008A" fill-opacity="1" d="M0,64L120,101.3C240,139,480,213,720,208C960,203,1200,117,1320,74.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
  <section>
      @foreach ($posts as $post)
        <div class="container ">
            <div class="row mx-auto justify-content-center">
                <div class="col-md-5 ">
                    <img src="https://i.ytimg.com/vi/xED9_9zcGo0/maxresdefault.jpg"
                        class="transform scale-100 hover:scale-110 duration-1000" alt="">
                </div>
            </div>
            <div class="row text-center pt-md-3 pt-1">
                <div class="col-md">
                    <h2 class="font-bold text-yellow-500 pb-2">OTOMATISASI DAN KELOLA PERKANTORAN</h2>
                    <p class="text-md">{{$post->keahlian}}</p>
                </div>
            </div>
        </div>
    </section>
     <section class="text-center text-white mt-24">
        <!-- Grid container -->
        <div class="container">
            <!-- Section: Iframe -->
            <div>
                <div class="row d-flex justify-content-end">
                    <div class="col my-auto">
                        <div class="text-end">
                            <h4 class="text-end font-bold text-gray-800">Keunggulan</h4>
                            <p class="text-end text-md text-gray-800 ">{{$post->keunggulan}}</p>
                            <h4 class="text-end font-bold text-gray-800">Sertifikat</h4>
                            <p class="text-end text-md text-gray-800 ">{{$post->sertifikasi}}</p>
                            <h4 class="text-end font-bold text-gray-800">CBT</h4>
                            <p class="text-end text-md text-gray-800 ">{{$post->cbt}}</p>
                        </div>
                    </div>
                    <div class="col">
                        <img src="https://smkwikrama.sch.id/uploads/posts/d27c8ea9addca6a79ebfe26def3072bb.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- Section: Iframe -->
        </div>
        <!-- Grid container -->
        @endforeach
    </section>
</div>
