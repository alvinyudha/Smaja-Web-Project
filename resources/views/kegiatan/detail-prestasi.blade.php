@extends('layouts.template')
@section('title', 'SMA Negeri Arjasa Jember')

@section('content')
    <main id="main">
        <style>
            .tags-container {
                display: flex;
                flex-wrap: wrap;
                gap: 5px;
            }

            .tags-title {
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            @media (max-width: 600px) {
                .tag {
                    font-size: 12px;
                    padding: 8px 10px;
                    text-align: center;
                }
            }

            .tag {
                text-transform: uppercase;
                white-space: nowrap;
                background-color: #e7f3fa;
                color: #61744A;
                padding: 10px 5px;
                border-radius: 5px;
                font-family: Arial, sans-serif;
                text-align: center;
                display: inline-block;
            }

            .tag:hover {
                background: #96b374;
                color: #fff;
            }

            .content-section p {
                line-height: 1.4;
            }

            .container2 {
                display: flex;
                align-items: center;
                border-radius: 8px;
                padding: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .container3 {
                align-items: center;
                border-radius: 8px;
                padding: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .date {
                text-align: center;
                margin-right: 10px;
            }

            .date .day {
                font-size: 36px;
                font-weight: bold;
                color: #61744A;
            }

            .date .month {
                font-size: 14px;
                font-weight: bold;
                color: #61744A;
            }

            .content {
                line-height: 1.4;
            }

            .content a {
                font-size: 14px;
                font-weight: bold;
            }

            .sidebar a:hover {
                text-decoration: underline;
            }

            /* breadcumb */
            .breadcrumb {
                list-style: none;
                display: flex;
                background-color: transparent;
                font-weight: bold;
                font-size: 16px;
                white-space: nowrap;
            }

            .breadcrumb li {
                margin-right: 5px;
            }

            .breadcrumb li+li:before {
                content: "/";
                margin-right: 5px;
            }

            .breadcrumb a {
                text-decoration: none;
            }

            .breadcrumb a:hover {
                text-decoration: underline;
            }
        </style>
        <?php
        date_default_timezone_set('Asia/Jakarta');
        $date = date('h:i:s A');
        ?>
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Prestasi</h2>
                </div>

                <nav>
                    <ul class="breadcrumb">
                        <li><a href="#">Prestasi</a></li>
                        <li><a href="#">Kegiatan Siswa</a></li>
                    </ul>
                </nav>
                <hr>

                <div class="row content">
                    <div class="col-lg-8">
                        <div class="content-section">
                            <img src="{{ asset('img/prestasi.png') }}" width="90%">
                            <h3 class="mt-3">Tim Putri Pramuka SMAJA Meraih Juara 3 Pioneering Tingkat Kabupaten</h3>
                            <p class="article-meta mt-3" style="font-size: 14px;">29 November 2024, <?= $date ?>| By Admin
                            </p>
                            <p>
                                Alhamdulillah Tim Putri Pramuka SMAJA Juara 3 Lomba Pionering Tingkat Kabupaten Jember Saka
                                Dirgantara di JSG Ajung Jember.
                            </p>
                            <div class="tags-title">TAGS:</div>
                            <div class="tags-container">
                                <a href="#" class="tag">Prestasi</a>
                                <a href="#" class="tag">Ekstrakurikuler</a>
                                <a href="#" class="tag">Kegiatan Sekolah</a>
                                <a href="#" class="tag">Kegiatan Siswa</a>
                            </div>
                            <hr>
                            <!-- Share Section -->
                            <p class="mt-4"><strong>Bagikan:</strong></p>
                            <div class="share-icons">
                                <a href="#"><img src="{{ asset('img/facebook.png') }}"></a>
                                <a href="#"><img src="{{ asset('img/instagram.png') }}"></a>
                                <a href="#"><img src="{{ asset('img/whatsapp.png') }}"></i></a>
                            </div>
                            <!-- Comment Section -->
                            <div class="comment-section mt-5">
                                <h5>Tulis Komentar</h5>
                                <textarea class="form-control" rows="4" placeholder="Tulis komentar Anda"></textarea>
                                <button class="btn btn-submit mt-3">Kirim</button>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="sidebar">
                            <div class="sidebar-title"><strong>Baca Lainnya</strong></div>
                            <hr>
                            <ul>
                                <li class="container3"><a href="#">Juara Harapan 1 C1 Race Downhill 76</a>
                                    <br><small>10 September
                                        2024</small>
                                </li>
                                <li class="mt-3 container3"><a href="#">Juara 1 Seni Tunggal Pencak Silat Tingkat
                                        Nasional
                                        2024</a> <br><small>10 September 2024</small></li>
                                <li class="mt-3 container3"><a href="#">Memperingati Hari Pahlawan 10 November dengan
                                        Cosplay Pahlawan di SMA Negeri Arjasa Jember
                                        2024</a> <br><small>13 November 2024</small></li>
                            </ul>
                            <div class="sidebar-title mt-4"><strong>Agenda Sekolah</strong></div>
                            <hr>
                            <div class="container2">
                                <div class="date">
                                    <div class="day">21</div>
                                    <div class="month">NOV</div>
                                </div>
                                <div class="content">
                                    <a href="#">Sumatif Akhir Semester Tahun Ajaran 2024/2025</a>
                                </div>
                            </div>
                            <div class="container2 mt-3">
                                <div class="date">
                                    <div class="day">10</div>
                                    <div class="month">DES</div>
                                </div>
                                <div class="content">
                                    <a href="#">Kegiatan Akhir Semester</a>
                                </div>
                            </div>
                            <div class="container2 mt-3">
                                <div class="date">
                                    <div class="day">20</div>
                                    <div class="month">DES</div>
                                </div>
                                <div class="content">
                                    <a href="#">Penerimaan Rapor Semester Gasal Tahun Ajaran 2024</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->
    </main>
@endsection
