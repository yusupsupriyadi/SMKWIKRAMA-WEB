<div>
    <section>
        <section class="pt-32 pb-2 px-4 text-center " style="background-color: #0de51c">
        <h1 class="mb-3 font-bold text-white">School Alliance</h1>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0de51c" fill-opacity="1"
            d="M0,64L120,101.3C240,139,480,213,720,208C960,203,1200,117,1320,74.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
        </path>
    </svg>
    </section>
    <section>
        <div class="container ">
            @foreach ($posts as $post)
            <div class="row mx-auto justify-content-center pt-5">
                <div class="col-md-5 ">
                    <img src="{{$post->gambar}}"
                        class="transform scale-100 hover:scale-110 duration-1000" alt="" data-aos="zoom-in" data-aos-duration="3000">
                </div>
            </div>
            <div class="row pt-md-3 pt-1">
                <div class="col-md text-center" data-aos="zoom-in" data-aos-duration="3000">
                    <h2 class="font-bold  text-yellow-500 pb-2">{{$post->name}}</h2>
                    <h6 class="">Tanggal Berdiri</h6>
                    <h6 class="text-gray-700">{{$post->tanggal_berdiri}}</h6>
                    <h6>Yayasan</h6>
                    <h6 class="text-gray-700">{{$post->yayasan}}</h6>
                    <h6>Kepala Sekolah</h6>
                    <h6 class="text-gray-700">{{$post->kepala_sekolah}}</h6>
                    <h6>Alamat</h6>
                    <h6 class="text-gray-700">{{$post->alamat}}</h6>
                    <h6>Email</h6>
                    <h6 class="text-gray-700">{{$post->email}}</h6>
                    <h6>Website</h6>
                    <a class="text-gray-700" href="{{$post->website}}">{{$post->website}}</a>
                    <h6>No. Telp</h6>
                    <h6 class="text-gray-700">{{$post->no_telp}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
