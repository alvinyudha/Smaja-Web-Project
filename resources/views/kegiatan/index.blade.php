@extends('layouts.template')
@section('title', 'SMA Negeri Arjasa Jember')

@section('content')
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Prestasi</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 mt-4 mt-lg-0 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <img src="{{ asset('img/prestasi3.png') }}" class="img-fluid" alt="">
                            <h3 class="mt-3">Tim Putri Pramuka SMAJA Meraih Juara 3 Pionering Tingkat Kabupaten</h3>
                            <p><small>29 Nov 2024</small></p>
                            <p>Alhamdulillah Tim Putri Pramuka SMAJA Juara 3 Lomba Pionering Tingkat.....</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <img src="{{ asset('img/prestasi1.png') }}" class="img-fluid" alt="">
                            <h3 class="mt-3">Tim Putra Meraih Kejuaraan Bola Voli Kecabdin Pendidikan Cup 1</h3>
                            <p><small>29 Nov 2024</small></p>
                            <p>Syukur alhamdulillah tim putra bola voli meraih juara kecabdin pendidikan cup....</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <img src="{{ asset('img/prestasi4.png') }}" class="img-fluid" alt="">
                            <h3 class="mt-3">Tim Putra Meraih Kejuaraan Bola Voli Kecabdin Pendidikan Cup 1</h3>
                            <p><small>29 Nov 2024</small></p>
                            <p>Syukur alhamdulillah tim putra bola voli meraih juara kecabdin pendidikan cup....</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ asset('img/prestasi5.png') }}" class="img-fluid" alt="">
                            <h3 class="mt-3">Juara Tenis</h3>
                            <p><small>29 Nov 2024</small></p>
                            <p>Kejuaraan daerah tenis provinsi Jawa Timur Tahun 2021</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <img src="{{ asset('img/prestasi6.png') }}" class="img-fluid" alt="">
                            <h3 class="mt-3">Tim Putri Pramuka SMAJA Meraih Juara 3 Pionering Tingkat Kabupaten</h3>
                            <p><small>29 Nov 2024</small></p>
                            <p>Alhamdulillah Tim Putri Pramuka SMAJA Juara 3 Lomba Pionering Tingkat.....</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="buy-btn text-center">Lihat Lebih Lengkap</a>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Ekstrakurikuler</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-3" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <img src="{{ asset('img/ekskul3.png') }}" class="img-fluid" alt="">
                            <h4 class="mt-3"><a href="/kegiatan/ekstrakurikuler">TAEKWONDO</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-3" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <img src="{{ asset('img/ekskul1.png') }}" class="img-fluid" alt="">
                            <h4 class="mt-3"><a href="/kegiatan/ekstrakurikuler">VOLI</a></h4>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-3" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <img src="{{ asset('img/ekskul2.png') }}" class="img-fluid" alt="">
                            <h4 class="mt-3"><a href="/kegiatan/ekstrakurikuler">BASKET</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-3" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <img src="{{ asset('img/bridge.png') }}" class="img-fluid" alt="">
                            <h4 class="mt-3"><a href="/kegiatan/ekstrakurikuler">BRIDGE</a></h4>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-3" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <img src="{{ asset('img/hegas.png') }}" class="img-fluid" alt="">
                            <h4 class="mt-3"><a href="/kegiatan/ekstrakurikuler">HEGAS WANA</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-3" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <img src="{{ asset('img/bola.png') }}" class="img-fluid" alt="">
                            <h4 class="mt-3"><a href="/kegiatan/ekstrakurikuler">SEPAK BOLA & FUTSAL</a></h4>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="#" class="buy-btn text-center">Lihat Lebih Lengkap</a>
                </div>
            </div>
        </section>
        <!-- End Services Section -->
    </main>
@endsection
