@extends('layouts.template')
@section('title', 'SMA Negeri Arjasa Jember')

@section('content')
    <style>
        .content-section p {
            line-height: 1.5;
        }
    </style>
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kepala Sekolah</h2>
                </div>

                <div class="row content">

                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <div class="row content-section">
                            <div class="col-lg-12">
                                <h3>Widiwasito, S.Pd., M.Pd.</h3>
                                <p>
                                    Assalamu’alaikum warahmatullahi wabarakatuh,
                                    <br>
                                    Salam sejahtera untuk kita semua,
                                    <br>
                                    <br>
                                    Puji Syukur kami panjatkan kehadirat Allah SWT, Tuhan Yang Maha Esa karena atas karunia
                                    dan berkah-Nya SMA Negeri Arjasa memberikan informasi pendidikan kepada masyarakat
                                    melalui situs website SMA Negeri Arjasa.
                                    <br>
                                    <br>
                                    SMA Negeri Arjasa berkomitmen untuk selalu memberikan pendidikan terbaik, yang tidak
                                    hanya berfokus
                                    pada pencapaian akademik, tetapi juga pada pembentukan karakter, pengembangan
                                    keterampilan, serta penanaman nilai-nilai luhur. Dengan semangat "Unggul dalam Prestasi,
                                    Mulia dalam Budi Pekerti," kita ingin memastikan bahwa setiap siswa di SMA Negeri Arjasa
                                    mampu menjadi pribadi yang berintegritas, inovatif, dan siap menghadapi tantangan masa
                                    depan.
                                    <br>
                                    <br>
                                    Terima Kasih
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/skills.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pendidik</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('img/team/pendidik1.png') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Elly Laeliyah, S.Si.</h4>
                                <span>NIP. 12345 6789 0</span>
                                <p>Waka Sarana & Prasarana Kimia</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('img/team/pendidik2.png') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Sulistiowati, S.pd.</h4>
                                <span>NIP. 12345 6789 0</span>
                                <p>Waka Kurikulum Geografi</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="{{ asset('img/team/pendidik3.png') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Nurul Chom A, S.pd.</h4>
                                <span>NIP. 12345 6789 0</span>
                                <p>Waka Kesiswaan Ekonomi</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{ asset('img/team/pendidik4.png') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Dra. Anis Junaedah, A.Ma.Pust.</h4>
                                <span>NIP. 12345 6789 0</span>
                                <p>Waka Kurikulum Geografi</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center mt-5">
                    <a href="/profil/pendidik" class="buy-btn text-center">Selengkapnya</a>
                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tenaga Pendidik</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('img/team/tenaga1.png') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Aryono</h4>
                                <span>NIP. 12345 6789 0</span>
                                <p>Pengadministrasi Kehumasan</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('img/team/tenaga2.png') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Asmaliya</h4>
                                <span>NIP. 12345 6789 0</span>
                                <p>Tenaga Administrasi Sekolah</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="{{ asset('img/team/tenaga3.png') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Agus Hadi Wijaya</h4>
                                <span>NIP. 12345 6789 0</span>
                                <p>Tenaga Administrasi Sekolah</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{ asset('img/team/tenaga4.png') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Luluk Nurhayati, S.H.</h4>
                                <span>NIP. 12345 6789 0</span>
                                <p>Tenaga Perpustakaan</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="/profil/tenaga-pendidik" class="buy-btn text-center">Selengkapnya</a>
                </div>

            </div>
        </section>
        <!-- End Team Section -->
    </main>
@endsection
