@extends('layouts.template')
@section('title', 'SMA Negeri Arjasa Jember')

@section('content')
    <main id="main">
        <!-- ======= Daftar Tamu Section ======= -->
        <section id="about" class="pricing about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Daftar Buku Tamu</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-12">
                        <div class="sidebar">
                            <div class="sidebar-title"><strong>Daftar Tamu</strong></div>
                            <hr>
                            <ul class="list-unstyled">
                                <li><strong>Rusdi Salim</strong><br>
                                    <small>17 November 2024</small><br>
                                    <p>Mantap websitenya bikin mudah bisa dapetin info2 terbaru terkait perkembangan dan
                                        kemajuan prestasi seputar SMAJA</p>
                                </li>
                                <hr>
                                <li><strong>Fuad Santoso</strong><br>
                                    <small>25 Juli 2024</small><br>
                                    <p>Semangat terus maju SMA ku....</p>
                                </li>
                                <hr>
                                <li><strong>Brando Widodo</strong><br>
                                    <small>8 Juli 2024</small><br>
                                    <p>Alhamdulillah, tergabung jadi warga smaja, sebuah kenangan dan kebahagiaan yg tak
                                        akan terlupakan</p>
                                </li>
                                <hr>
                                <li><strong>Budiono Siregar</strong><br>
                                    <small>6 Desember 2023</small><br>
                                    <p>Saya Laksamana Muda Budiono Siregar. Salam kenal.</p>
                                </li>
                                <hr>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container text-center mt-5">
                    <nav>
                        <ul class="pagination justify-content-center flex-wrap">
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
        <!-- End Daftar Tamu Section -->
    </main>
@endsection
