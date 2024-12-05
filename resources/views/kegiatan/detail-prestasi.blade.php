@extends('layouts.template')
@section('title', 'SMA Negeri Arjasa Jember')

@section('content')
    <style>
        p {
            padding-right: 60px;
        }
    </style>
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Prestasi</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-9">
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
                    <div class="col-lg-3">
                        <div class="sidebar">
                            <div class="sidebar-title"><strong>Baca Lainnya</strong></div>
                            <hr>
                            <ul class="list-unstyled">
                                <li><a href="#">Juara Harapan 1 C1 Race Downhill 76</a> <br><small>10 September
                                        2024</small></li>
                                <li class="mt-3"><a href="#">Juara 1 Seni Tunggal Pencak Silat Tingkat Nasional
                                        2024</a> <br><small>10 September 2024</small></li>
                            </ul>
                            <div class="sidebar-title mt-4"><strong>Agenda Sekolah</strong></div>
                            <hr>
                            <!-- Add more agenda items as necessary -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->
    </main>
@endsection
