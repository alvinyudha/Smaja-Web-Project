@extends('layouts.template')
@section('title', 'SMA Negeri Arjasa Jember')

@section('content')
    <style>
        @media (max-width: 768px) {
            .portfolio-details-carousel img {
                max-height: 300px;
                /* Atur tinggi maksimum untuk perangkat kecil */
                object-fit: cover;
                /* Memastikan gambar tidak terdistorsi */
            }
        }

        .portfolio-details .portfolio-details-carousel img {
            width: 100%;
            /* Memastikan gambar memenuhi lebar kontainer */
            height: 70vh;
            /* Mempertahankan aspek rasio gambar */
        }

        .portfolio-caption {

            text-align: center;
            /* Teks berada di tengah */
            background-color: #444444;
            /* Warna latar belakang putih dengan transparansi */
            padding: 10px;
            /* Jarak antara teks dan tepi latar belakang */

        }

        .portfolio-caption h5 {
            font-size: 2rem;
            font-weight: bold;
            text-align: left;
            color: #ffffff;
            margin-bottom: 20px;
            padding-left: 15px;
        }

        .portfolio-caption p {
            font-size: 1rem;
            color: #ffffff;
            padding-left: 15px;
        }

        /* TABEL */
        .table-wrapper {
            overflow-x: auto;
            margin: 20px 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-light {
            background-color: #f8f9fa;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: start;
            /* border: 1px solid #ddd; */
        }

        @media (max-width: 600px) {

            .table th,
            .table td {
                width: 100%;
            }

            .table tr {
                margin-bottom: 15px;
            }
        }

        a {
            color: white;
        }

        a:hover {
            color: #FBEF19;
            text-decoration: none;
        }
    </style>


    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>SMA Negeri Arjasa Jember</h1>
                    <h2>Jl. Sultan Agung No.64, Krajan, Arjasa, Kec. Arjasa, Kabupaten Jember, Jawa Timur 68191</h2>
                    <div class="d-lg-flex">
                        <a href="/tentang" class="btn-get-started scrollto">Selengkapnya</a>
                        <a href="https://www.youtube.com/watch?v=YkpwpxjwPtM" class="venobox btn-watch-video"
                            data-vbtype="video" data-autoplay="true"> Profil Video <i class="icofont-play-alt-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('img/background-2.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        {{-- <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/skills.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <div class="section-title">
                            <h2>Sambutan Kepala Sekolah</h2>
                        </div>

                        <div class="row content">
                            <div class="col-lg-12">
                                <h3>Widiwasito, S.Pd., M.Pd.</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.4o</p>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                    tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Skills Section --> --}}

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Berita Terbaru</h2>
                </div>
                <div class="portfolio-details-container text-center pt-5 ">
                    <div class="owl-carousel portfolio-details-carousel">
                        <div class="portfolio-item">
                            <img src="{{ asset('img/portfolio/kwon.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-caption">
                                <h5><a href="#">Diklat Taekwondo SMAJA</a></h5>
                                <p>Diklat ini dilaksanakan untuk...</p>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{ asset('img/portfolio/kwon2.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-caption">
                                <h5><a href="#">Demo Ekskul Taekwondo SMAJA</a></h5>
                                <p>Deskripsi untuk gambar 2.</p>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{ asset('img/portfolio/basket.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-caption">
                                <h5><a href="#">Tim Basket SMAJA</a></h5>
                                <p>Deskripsi untuk gambar 3.</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <a href="/informasi" class="buy-btn">Tampilkan Semua</a>
                </div>
            </div>
        </section>
        <!-- End Portfolio Details Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Prestasi</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <img src="{{ asset('img/prestasi1.png') }}" class="img-fluid" alt="">
                            <h3>SMAN Arjasa Jember adalah salah satu sekolah penggerak di Jember</h3>
                            <p>Apakah Sekolah Penggerak?
                                <br>
                                Sekolah Penggerak adalah sekolah....
                            </p>
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
                <div class="text-center mt-5">
                    <a href="#" class="buy-btn text-center">Selengkapnya</a>
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Ekstrakurikuler</h2>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img src="{{ asset('img/ekskul1.png') }}" class="img-fluid" alt="">
                            <h4 class="mt-3"><a href="">VOLI</a></h4>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <img src="{{ asset('img/ekskul2.png') }}" class="img-fluid" alt="">
                            <h4 class="mt-3"><a href="">BASKET</a></h4>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <img src="{{ asset('img/ekskul3.png') }}" class="img-fluid" alt="">
                            <h4 class="mt-3"><a href="">TAEKWONDO</a></h4>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="buy-btn text-center">Selengkapnya</a>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Agenda</h2>
                </div>

                <div class="row">
                    <div class="container mt-2">
                        <table class="table text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Acara</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>21 November 2024</td>
                                    <td>Sumatif Akhir Semester Tahun Ajaran 2024/2025</td>
                                    <td>Penilaian Sumatif Akhir Semester</td>
                                </tr>
                                <tr>
                                    <td>10 Desember 2024</td>
                                    <td>Kegiatan Akhir Semester</td>
                                    <td>Kegiatan Akhir Semester SMAN Arjasa</td>
                                </tr>
                                <tr>
                                    <td>20 Desember 2024</td>
                                    <td>Penerimaan Rapor Semester Gasal Tahun Ajaran 2024</td>
                                    <td>Penerimaan Rapor Semester Gasal Tahun Ajaran 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="buy-btn text-center">Selengkapnya</a>
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->
    </main>
@endsection
