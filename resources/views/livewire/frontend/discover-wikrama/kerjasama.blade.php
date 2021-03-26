<div>
    <section class="pt-32 pb-2 px-4 text-center " style="background-color: #0de51c">
        <h1 class="mb-3 font-bold text-white">Kerjasama</h1>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0de51c" fill-opacity="1"
            d="M0,64L120,101.3C240,139,480,213,720,208C960,203,1200,117,1320,74.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
        </path>
    </svg>
    <section>
        <div class="container">
            <div>
                <p class="text-lg text-center">SMK Wikrama Bogor berusaha menjadi lembaga yang berperan mengoptimalkan
                    penyaluran tamatan SMK dan sumber informasi untuk pencari kerja. Tidak mungkin bisa dilaksanakan
                    proses pembelajaran yang mengarah kepada kompetensi jika tidak ada pasangan industri/usaha kerja,
                    sebagai lingkungan kerja dimana siswa belajar keahlian dan profesional serta etos kerja sesuai
                    dengan tuntutan dunia kerja. SMK Wikrama selama 2 (dua) tahun terakhir telah menyalurkan 819
                    siswa/siswinya yang telah lulus ke dunia usaha dan dunia industri.</p>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row row-cols-1 row-cols-md-6 g-4">
                @foreach ($posts as $post)
                    <div class="col">
                        <div data-aos="zoom-in" data-aos-duration="3000">
                            <img src="{{ $post->name}}" class="rounded mx-auto d-block" alt="">
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
