@extends('layouts.template')
@section('title', 'SMA Negeri Arjasa Jember')

@section('content')
    <style>
        .content-section p {
            line-height: 1.5;
        }

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
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Ekstrakurikuler</h2>
                </div>
                <nav>
                    <ul class="breadcrumb">
                        <li><a href="#">Ekstrakurikuler</a></li>
                        <li><a href="#">Kegiatan Siswa</a></li>
                    </ul>
                </nav>
                <hr>
                <div class="row content">
                    <div class="col-lg-8">
                        <div class="content-section">
                            <img src="{{ asset('img/ekskul3.png') }}" width="90%">
                            <h3 class="mt-3">TAEKWONDO</h3>
                            <p class="article-meta" style="font-size: 14px;">25 November 2024, <?= $date ?> | By Admin</p>
                            <p>
                                Taekwondo (juga dieja Tae Kwon Do, Taekwon-Do) adalah olah raga bela diri Korea yang paling
                                popular dan juga merupakan olah raga nasional Korea. Senibela diri ini yang paling banyak
                                dimainkan di Olimpiade bahkan tingkat dunia.
                            </p>
                            <p>
                                Dalam bahasa Korea, hanja untuk Tae berarti "menendang atau menghancurkan dengan kaki"; Kwon
                                berarti "tinju"; dan Do berarti "jalan" atau "seni". Jadi, Taekwondo dapat diterjemahkan
                                dengan bebas sebagai "senitangan dan kaki" atau "jalan" atau "cara kaki dan kepalan". Seni
                                bela diri dari negeri Ginseng ini memiliki keistimewaan pada jurus-jurus tendangan
                                mematikan.
                            </p>
                            <p> Tujuan Ekskul Taekwondo :</p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Mengasah kemampuan fisik dan mental siswa.</li>
                                <li><i class="ri-check-double-line"></i> Melatih teknik bela diri untuk perlindungan diri.
                                </li>
                                <li><i class="ri-check-double-line"></i> Meningkatkan kepercayaan diri dan disiplin.
                                </li>
                                <li><i class="ri-check-double-line"></i> Mempersiapkan siswa untuk mengikuti kejuaraan
                                    Taekwondo di tingkat regional maupun nasional.
                                </li>
                            </ul>
                            <p>Kegiatan yang Dilakukan :</p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Latihan teknik dasar seperti tendangan (chagi),
                                    pukulan (jirugi), dan pertahanan (makgi).
                                </li>
                                <li><i class="ri-check-double-line"></i> Sparring (pertandingan) untuk melatih strategi dan
                                    keterampilan bertarung.

                                </li>
                                <li><i class="ri-check-double-line"></i> Penguasaan jurus atau pola gerakan (poomsae).

                                </li>
                                <li><i class="ri-check-double-line"></i> Pengujian kenaikan sabuk (gyeup/dan) secara
                                    berkala.
                                </li>
                                <li><i class="ri-check-double-line"></i> Partisipasi dalam kompetisi antar sekolah atau
                                    turnamen resmi.

                                </li>
                            </ul>
                            <p> Manfaat Bergabung di Ekskul Taekwondo :</p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Meningkatkan kekuatan fisik, kelincahan, dan
                                    stamina.
                                </li>
                                <li><i class="ri-check-double-line"></i> Sparring (pertandingan) untuk melatih strategi dan
                                    keterampilan bertarung.

                                </li>
                                <li><i class="ri-check-double-line"></i> Melatih kedisiplinan dan tanggung jawab.
                                </li>
                                <li><i class="ri-check-double-line"></i> Mendapatkan pengalaman baru melalui kompetisi dan
                                    kegiatan bersama tim.
                                </li>
                                <li><i class="ri-check-double-line"></i> Menjadi bagian dari komunitas yang mendukung dan
                                    membangun semangat juang.
                                </li>
                            </ul>
                            <p>Ekskul Taekwondo di SMAJA terbuka bagi semua siswa, baik pemula maupun yang sudah memiliki
                                pengalaman sebelumnya. Dengan pelatih berpengalaman dan fasilitas yang mendukung, siswa akan
                                mendapatkan pelatihan berkualitas dalam suasana yang menyenangkan dan penuh semangat.

                                Mari bergabung dan jadilah bagian dari pejuang tangguh SMAJA! 🥋✨</p>
                            <div class="tags-title">TAGS:</div>
                            <div class="tags-container">
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
