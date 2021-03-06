<div>
    {{-- Profil --}}
    <section id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        {{-- carousel --}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/photo/slide1.jpg') }}" class="d-block w-md-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-bold">There is no Learning</h5>
                    <p>Without Vission School Leadership</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('photo/slide2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-bold">Productive and collaborative learning</h5>
                    <p>Productive in every lesson and train to work together with friends or teams</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('photo/slide3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-bold">Train leadership and learn culture</h5>
                    <p>leadership and develop hobbies and have fun</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>
    <div class="container" data-aos="fade-right" data-aos-duration="3000">
        <div class="row justify-content-center pt-md-20 pt-5 ">
            <div class="col-md-3">
                <img src="{{ asset('photo/profil.png') }}" class=" transform scale-100 hover:scale-125 duration-1000"
                    alt="">
            </div>
            <div class="col-md-5">
                <h2 class="font-bold px-3 px-md-0 text-yellow-600">PENDIRI SMK WIKRAMA INDONESIA</h2>
                <p class="px-3 px-md-0">Kosultan Eksekutif IDS Rumah Pendidikan Indonesia yang telah berpengalaman
                    membangun
                    dan memimpin SMK
                    Wikrama Bogor selama 18 tahun dan saat ini menjadi Ketua Perguruan Wikrama Indonesia</p>
                <div class="px-3 px-md-0">
                    <a href="{{ route('frontend.sejarah') }}"
                        class="bg-yellow-600 rounded-full py-2 px-4 text-white font-bold hover:opacity-50">SEJARAH</a>
                </div>
            </div>
        </div>
    </div>

    {{-- end profil --}}
    <section class="jurusan" id="jurusan">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,64L60,64C120,64,240,64,360,85.3C480,107,600,149,720,181.3C840,213,960,235,1080,213.3C1200,192,1320,128,1380,96L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="font-bold text-white pb-5">PROGRAM KEAHLIAN</h2>
                </div>
            </div>
            <section class="mt-10">
                <div class="owl-carousel owl-theme px-3 px-md-0">
                    <div class="item pt-5 ">
                        <div class="card shadow" style="border: none">
                            <div class="card-body jurusan">
                                <img src="{{ asset('photo/rpl.png') }}" width="100"
                                    class="transform scale-100 hover:scale-125 duration-1000" alt="">
                                <h4 class="text-center font-bold text-lg text-yellow-300">Rekayasa Perangkat Lunak</h4>
                                <p class="card-text text-center text-sm text-white">Merancang solusi perangkat lunak
                                    berbasis web,
                                    desktop dan mobile dalam berbagai skala kompleksitas yang mengintegrasikan persoalan
                                    ethical, social, legal, security dan ekonomi.</p>
                                <a href="{{ route('program-keahlian.rpl') }}"><span style="font-size: 1.8em;"><i
                                            class="fad fa-info-circle"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item pt-5 ">
                        <div class="card shadow" style="border: none">
                            <div class="card-body jurusan">
                                <img src="{{ asset('photo/otkp.png') }}" width="100"
                                    class="transform scale-100 hover:scale-125 duration-1000" alt="">
                                <h4 class="text-center font-bold text-lg text-yellow-300">Otomitasi & Tata Kelola
                                    Pengkantoran</h4>
                                <p class="card-text text-center text-sm text-white">Mengetik cepat dengan teknik 10 jari
                                    dengan
                                    rata-rata kecepatan 250 EPM 98%, mengelola dokumen dan arsip kantor, menangani
                                    telepon,
                                    mengelola keuangan dan mampu menangani tamu</p>
                                <a href="{{ route('program-keahlian.otkp') }}"><span style="font-size: 1.8em;"><i
                                            class="fad fa-info-circle"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item pt-5 ">
                        <div class="card shadow" style="border: none">
                            <div class="card-body jurusan">
                                <img src="{{ asset('photo/tkj.png') }}" width="100"
                                    class="transform scale-100 hover:scale-125 duration-1000" alt="">
                                <h4 class="text-center font-bold text-lg text-yellow-300">Teknik Komputer & Jaringan
                                </h4>
                                <p class="card-text text-center text-sm text-white">Peserta didik mampu menjadi seorang
                                    teknisi
                                    jaringan, administrasi jaringan, network engineer dan menguasai komunikasi.
                                    Menginstal
                                    perangkat jaringan lokal (Local Area Network)</p>
                                <a href="{{ route('program-keahlian.tkj') }}"><span style="font-size: 1.8em;"><i
                                            class="fad fa-info-circle"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item pt-5 ">
                        <div class="card shadow" style="border: none">
                            <div class="card-body jurusan">
                                <img src="{{ asset('photo/mmd.png') }}" width="100"
                                    class="transform scale-100 hover:scale-125 duration-1000" alt="">
                                <h4 class="text-center font-bold text-lg text-yellow-300">Multimedia</h4>
                                <p class="card-text text-center text-sm text-white">kompetensi keahlian Multimedia
                                    menjawab tantangan
                                    perkembangan komunikasi visual, desain grafis dan multimedia</p>
                                <a href="{{ route('program-keahlian.mmd') }}"><span style="font-size: 1.8em;"><i
                                            class="fad fa-info-circle"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item pt-5 ">
                        <div class="card shadow" style="border: none">
                            <div class="card-body jurusan">
                                <img src="{{ asset('photo/bdp.png') }}" width="100"
                                    class="transform scale-100 hover:scale-125 duration-1000" alt="">
                                <h4 class="text-center font-bold text-lg text-yellow-300">Bisnis Daring & Pemasaran</h4>
                                <p class="card-text text-center text-sm text-white">Kompetensi keahlian Bisnis Daring dan Pemasaran memiliki kompetensi yang mirip dengan program Multimedia dan Perkantoran</p>
                                <a href="{{ route('program-keahlian.bdp') }}"><span style="font-size: 1.8em;"><i
                                            class="fad fa-info-circle"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item pt-5 ">
                        <div class="card shadow" style="border: none">
                            <div class="card-body jurusan">
                                <img src="{{ asset('photo/tbg.png') }}" width="100"
                                    class="transform scale-100 hover:scale-125 duration-1000" alt="">
                                <h4 class="text-center font-bold text-lg text-yellow-300">Tata Boga</h4>
                                <p class="card-text text-center text-sm text-white">Pengetahuan pariwisata, pengetahuan
                                    mengenai bahan,
                                    pengolahan, penyajian dan penyimpanan bahan sesuai dengan jenis bahan makanannya</p>
                                <a href="{{ route('program-keahlian.tbg') }}"><span style="font-size: 1.8em;"><i
                                            class="fad fa-info-circle"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <div class="col-4">
                            
                        </div>
                        <div class="col">
                            <h4 class="font-bold text-yellow-300"></h4>
                            <p class="text-sm font-bold text-white">.</p>
                            <a href="" class="text-sm font-bold text-yellow-400">VIEW MORE</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1"
            d="M0,160L34.3,138.7C68.6,117,137,75,206,53.3C274.3,32,343,32,411,69.3C480,107,549,181,617,202.7C685.7,224,754,192,823,154.7C891.4,117,960,75,1029,90.7C1097.1,107,1166,181,1234,213.3C1302.9,245,1371,235,1406,229.3L1440,224L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
        </path>
    </svg>
    <section>
        <div class="container ">
            <div class="row text-center">
                <div class="col">
                    <h2 class="font-bold text-yellow-500 pb-2">FASILITAS</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="{{ asset('photo/gedung.png') }}"
                        class="transform scale-100 hover:scale-105 duration-1000" alt="">
                    <P class="text-center">Gedung Utama SMK Wikrama Bogor</P>
                </div>
                <div class="col-md">
                    <div data-aos="zoom-in-right" data-aos-duration="2000">
                        <img src="{{ asset('photo/gedung2.png') }}"
                            class="transform scale-100 hover:scale-125 duration-1000 text-center" alt="">
                        <P class="text-center">Lab Bisnis Daring</P>
                    </div>
                    <div data-aos="zoom-in-left" data-aos-duration="2000">
                        <img src="{{ asset('photo/gedungmmd.png') }}"
                            class="transform scale-100 hover:scale-125 duration-1000" alt="">
                        <P class="text-center">Lab Multimedia</P>
                    </div>
                </div>
                <div class="col-md">
                    <div data-aos="zoom-in-right" data-aos-duration="2000">
                        <img src="{{ asset('photo/gedung3.png') }}"
                            class="transform scale-100 hover:scale-125 duration-1000" alt="">
                        <P class="text-center ">Perpustakaan</P>
                    </div>
                    <div data-aos="zoom-in-left" data-aos-duration="2000">
                        <img src="{{ asset('photo/gedung4.png') }}"
                            class="transform scale-100 hover:scale-125 duration-1000" alt="">
                        <P class="text-center">Lab Rekayasa Perangkat Lunak</P>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col py-2">
                        <a href="{{ route('campus.fasilitas') }}"
                            class="font-bold text-sm text-white py-1 px-2 rounded-full bg-yellow-500">View more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- video --}}
    <section class="text-center text-white" style="background-color: #d97706">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,0L48,26.7C96,53,192,107,288,154.7C384,203,480,245,576,266.7C672,288,768,288,864,245.3C960,203,1056,117,1152,74.7C1248,32,1344,32,1392,32L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 my-auto">
                    <div data-aos="fade-down" data-aos-duration="2000">
                        <h1 class="text-start font-bold text-white">Video Pilihan</h1>
                        <p class="text-start text-lg ">7 Jurusan SMK Wikrama Bogor</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                    <div class="ratio ratio-16x9">
                        <iframe class="shadow-1-strong rounded" src="https://www.youtube.com/embed/BeIHXmayzIA"
                            title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#d97706" fill-opacity="1"
            d="M0,256L48,261.3C96,267,192,277,288,245.3C384,213,480,139,576,90.7C672,43,768,21,864,21.3C960,21,1056,43,1152,48C1248,53,1344,43,1392,37.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <selection>
        <div class="container mx-auto py-4">
            <div class="bg-gradient-to-r from-purple-500 via-pink-500 to-yellow-500 rounded-3xl shadow-xl ">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md" data-aos="fade-right" data-aos-duration="2000">
                        <img src="{{ asset('photo/ppdb.png') }}" class="rounded-l-3xl ">
                    </div>
                    <div class="col-md py-4 py-md-0 px-4 px-md-0" data-aos="fade-left" data-aos-duration="2000">
                        <h6 class="text-yellow-500 opacity-90">Join With Us</h6>
                        <h1 class="pb-2 text-white font-bold">PPDB 2021 - 2022</h1>
                        <p class="text-white pr-11">Berkomitmen dalam mencetak Generasi terpelajar, religius dan
                            berakhlak mulia, Dengan Fasilitas penunjang belajar lengkap: perpustakaan, lab computer,
                            lapangan bola dan basket, perangkat alat musik, dll.</p>
                        <div class="transform scale-100 hover:scale-125 duration-1000">
                            <a href="https://ppdb.smkwikrama.sch.id/"
                                class="py-2 px-4 rounded-full bg-yellow-500 font-bold text-lg text-white shadow-xl">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </selection>
    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <h1>Events & News</h1>
                </div>
                <div class="col-md-2 pt-2">
                    <a href="{{ route('campus.berita') }}"
                        class=" py-2 px-4 text-lg font-bold rounded-full text-white bg-yellow-600" style="text-decoration: none;" >View More</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pt-4 mb-5 mb-md-5">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($posts as $post)
                    <div class="col" data-aos="flip-left" data-aos-duration="3000">
                        <div class="card h-96">
                            <img width="300px" src="{{ url('storage/photo/' . $post->gambar) }}">
                            <div class="card-body">
                                <h2 class="card-title font-bold text-md">{{ $post->judul }}</h2>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted" type="date">{{ $post->updated_at }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="mt-5 mt-md-5">
         <div class="container ">
            <div class="row text-center">
                <div class="col">
                    <h2><a href="{{ route('discover-wikrama.testimoni-alumni')}}" class="font-bold text-yellow-500 pb-2" style="text-decoration: none;">Testimoni Alumni</a></h2>
                </div>
            </div>
         </div>
        <div class="owl-carousel owl-theme px-3 px-md-0">
            @foreach ($items as $post)
                <div class="item pt-3">
                    <div class="card h-100 " style="border: none">
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
    </section>
</div>
