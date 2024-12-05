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
        </style>
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Prestasi</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-8">
                        <div class="content-section">
                            <img src="{{ asset('img/prestasi.png') }}" width="90%">
                            <h3 class="mt-3">Tim Putri Pramuka SMAJA Meraih Juara 3 Pioneering Tingkat Kabupaten</h3>
                            <p class="article-meta">29 November 2024 | By Admin</p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo.
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
                            <ul class="list-unstyled">
                                <li class="container3"><a href="#">Juara Harapan 1 C1 Race Downhill 76</a>
                                    <br><small>10 September
                                        2024</small>
                                </li>
                                <li class="mt-3 container3"><a href="#">Juara 1 Seni Tunggal Pencak Silat Tingkat
                                        Nasional 2024</a> <br><small>10 September 2024</small></li>
                            </ul>
                            <div class="sidebar-title mt-4"><strong>Agenda Sekolah</strong></div>
                            <hr>
                            <div class="container2">
                                <div class="date">
                                    <div class="day">21</div>
                                    <div class="month">DES</div>
                                </div>
                                <div class="content">
                                    <a href="#">Sumatif Akhir Semester Tahun Ajaran 2024/2025</a>
                                </div>
                            </div>
                            <div class="container2 mt-3">
                                <div class="date">
                                    <div class="day">21</div>
                                    <div class="month">DES</div>
                                </div>
                                <div class="content">
                                    <a href="#">Sumatif Akhir Semester Tahun Ajaran 2024/2025</a>
                                </div>
                            </div>
                            <div class="container2 mt-3">
                                <div class="date">
                                    <div class="day">21</div>
                                    <div class="month">DES</div>
                                </div>
                                <div class="content">
                                    <a href="#">Sumatif Akhir Semester Tahun Ajaran 2024/2025</a>
                                </div>
                            </div>
                            <div class="container2 mt-3">
                                <div class="date">
                                    <div class="day">21</div>
                                    <div class="month">DES</div>
                                </div>
                                <div class="content">
                                    <a href="#">Sumatif Akhir Semester Tahun Ajaran 2024/2025</a>
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
