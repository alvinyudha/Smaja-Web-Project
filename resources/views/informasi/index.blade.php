@extends('layouts.template')
@section('title', 'SMA Negeri Arjasa Jember')

@section('content')
    <main id="main">
        <style>
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
        </style>
        <!-- ======= About Us Section ======= -->
        <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Berita</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 mt-4 mt-lg-0 mb-4 " data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <img src="{{ asset('img/berita1.png') }}" class="img-fluid" alt="">
                            <h3 class="mt-3">SMAN Arjasa Jember adalah salah satu sekolah penggerak di Jember</h3>
                            <p><small>29 Nov 2024</small></p>
                            <p>Apakah Sekolah Penggerak?
                                <br>
                                Sekolah Penggerak adalah sekolah....
                            </p>
                            <a href="/informasi/detail-berita" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <img src="{{ asset('img/prestasi3.png') }}" class="img-fluid" alt="">
                            <h3 class="mt-3">Tim Putri Pramuka SMAJA Meraih Juara 3 Pionering Tingkat Kabupaten</h3>
                            <p><small>29 Nov 2024</small></p>
                            <p>Alhamdulillah Tim Putri Pramuka SMAJA Juara 3 Lomba Pionering Tingkat.....</p>
                            <a href="/informasi/detail-berita" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ asset('img/prestasi2.png') }}" class="img-fluid" alt="">
                            <h3 class="mt-3">Juara Tenis</h3>
                            <p><small>29 Nov 2024</small></p>
                            <p>Kejuaraan daerah tenis provinsi Jawa Timur Tahun 2021</p>
                            <a href="/informasi/detail-berita" class="buy-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="/informasi/berita" class="buy-btn text-center">Lihat Lebih Lengkap</a>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Agenda</h2>
                </div>
                <div class="table-wrapper">
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

                {{-- <div class="container text-center mt-5">
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
                </div> --}}
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio pricing section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Galeri Video</h2>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><iframe width="100%" height="200"
                                src="https://www.youtube.com/embed/Nnl8kLmPVd0?si=pWXbEaDzMexXVCB0"></iframe></div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><iframe width="100%" height="200"
                                src="https://www.youtube.com/embed/Nnl8kLmPVd0?si=pWXbEaDzMexXVCB0"></iframe></div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><iframe width="100%" height="200"
                                src="https://www.youtube.com/embed/Nnl8kLmPVd0?si=pWXbEaDzMexXVCB0"></iframe></div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><iframe width="100%" height="200"
                                src="https://www.youtube.com/embed/Nnl8kLmPVd0?si=pWXbEaDzMexXVCB0"></iframe></div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><iframe width="100%" height="200"
                                src="https://www.youtube.com/embed/Nnl8kLmPVd0?si=pWXbEaDzMexXVCB0"></iframe></div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><iframe width="100%" height="200"
                                src="https://www.youtube.com/embed/Nnl8kLmPVd0?si=pWXbEaDzMexXVCB0"></iframe></div>
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
        <!-- End Portfolio Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Galeri Foto</h2>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('img/portfolio/foto1.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kegiatan 1</h4>
                            <a href="{{ asset('img/portfolio/foto1.png') }}" data-gall="portfolioGallery"
                                class="venobox details-link preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('img/portfolio/foto2.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kegiatan 2</h4>
                            <a href="{{ asset('img/portfolio/foto2.png') }}" data-gall="portfolioGallery"
                                class="venobox details-link preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('img/portfolio/foto3.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kegiatan 3</h4>
                            <a href="{{ asset('img/portfolio/foto3.png') }}" data-gall="portfolioGallery"
                                class="venobox details-link preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('img/portfolio/foto4.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kegiatan 1</h4>
                            <a href="{{ asset('img/portfolio/foto4.png') }}" data-gall="portfolioGallery"
                                class="venobox details-link preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('img/portfolio/foto5.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kegiatan 2</h4>
                            <a href="{{ asset('img/portfolio/foto5.png') }}" data-gall="portfolioGallery"
                                class="venobox details-link preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('img/portfolio/foto6.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kegiatan 3</h4>
                            <a href="{{ asset('img/portfolio/foto6.png') }}" data-gall="portfolioGallery"
                                class="venobox details-link preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
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
        <!-- End Portfolio Section -->
    </main>
@endsection
