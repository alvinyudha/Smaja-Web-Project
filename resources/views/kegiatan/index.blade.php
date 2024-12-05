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
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <img src="{{ asset('img/prestasi1.png') }}" class="img-fluid" alt="">
                            <h3>Tim Putra Meraih Kejuaraan Bola Voli Kecabdin Pendidikan Cup 1</h3>
                            <p>Syukur alhamdulillah tim putra bola voli meraih juara kecabdin pendidikan cup....</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ asset('img/prestasi2.png') }}" class="img-fluid" alt="">
                            <h3>Juara Tenis</h3>
                            <p>Kejuaraan daerah tenis provinsi Jawa Timur Tahun 2021</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <img src="{{ asset('img/prestasi3.png') }}" class="img-fluid" alt="">
                            <h3>Tim Putri Pramuka SMAJA Meraih Juara 3 Pionering Tingkat Kabupaten</h3>
                            <p>Alhamdulillah Tim Putri Pramuka SMAJA Juara 3 Lomba Pionering Tingkat.....</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <img src="{{ asset('img/prestasi4.png') }}" class="img-fluid" alt="">
                            <h3>Tim Putra Meraih Kejuaraan Bola Voli Kecabdin Pendidikan Cup 1</h3>
                            <p>Syukur alhamdulillah tim putra bola voli meraih juara kecabdin pendidikan cup....</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ asset('img/prestasi5.png') }}" class="img-fluid" alt="">
                            <h3>Juara Tenis</h3>
                            <p>Kejuaraan daerah tenis provinsi Jawa Timur Tahun 2021</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <img src="{{ asset('img/prestasi6.png') }}" class="img-fluid" alt="">
                            <h3>Tim Putri Pramuka SMAJA Meraih Juara 3 Pionering Tingkat Kabupaten</h3>
                            <p>Alhamdulillah Tim Putri Pramuka SMAJA Juara 3 Lomba Pionering Tingkat.....</p>
                            <a href="/kegiatan/detail-prestasi" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="container text-center mt-5">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">First</a>
                            </li>
                            <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">></a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Last</a>
                            </li>
                        </ul>
                    </nav>
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
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img src="{{ asset('img/ekskul1.png') }}" class="img-fluid" alt="">
                            <h4><a href="/kegiatan/ekstrakurikuler">VOLI</a></h4>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <img src="{{ asset('img/ekskul2.png') }}" class="img-fluid" alt="">
                            <h4><a href="/kegiatan/ekstrakurikuler">BASKET</a></h4>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <img src="{{ asset('img/ekskul3.png') }}" class="img-fluid" alt="">
                            <h4><a href="/kegiatan/ekstrakurikuler">TAEKWONDO</a></h4>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img src="{{ asset('img/bridge.png') }}" class="img-fluid" alt="">
                            <h4><a href="/kegiatan/ekstrakurikuler">BRIDGE</a></h4>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <img src="{{ asset('img/hegas.png') }}" class="img-fluid" alt="">
                            <h4><a href="/kegiatan/ekstrakurikuler">HEGAS WANA</a></h4>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <img src="{{ asset('img/bola.png') }}" class="img-fluid" alt="">
                            <h4><a href="/kegiatan/ekstrakurikuler">SEPAK BOLA & FUTSAL</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->
    </main>
@endsection
