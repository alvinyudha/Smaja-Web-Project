@extends('layouts.template')
@section('title', 'SMA Negeri Arjasa Jember')

@section('content')
    <style>
        .icon {
            margin-right: 10px;
            vertical-align: middle;
            /* Jarak antara ikon dan teks */
        }
    </style>
    <main id="main">
        <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row">
                    <div class="info"></div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">

                        {{-- <iframe src="https://maps.google.com/maps?q=sman+arjasa&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        <iframe width="600" height="400" style="width: 100%"
                            src="https://maps.google.com/maps?q=sman+arjasa&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-5 mt-4 mt-lg-0 " data-aos="fade-up" data-aos-delay="100">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class=""></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Jl. Sultan Agung No.64, Krajan, Arjasa, Kec. Arjasa,
                                    Kabupaten Jember, Jawa Timur 68191</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Telp</h3>
                                <p>(0331)-540133</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Fax</h3>
                                <p>(0331)-540133</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>smaarjasa@yahoo.co.id</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div><!-- End Contact Form -->

                </div>

            </div><!-- End Contact Form -->
            </div>
        </section>

        <section id="pricing" class="pricing">
            <div class="section-title">
                <h2>Buku Tamu</h2>
            </div>
            <div class="container d-flex justify-content-center align-items-center" data-aos="fade-up">
                <div class="col-lg-8 mt-4 mt-lg-0 " data-aos="fade-up" data-aos-delay="100">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="col-md-12">
                            <label for="name-field" class="pb-2"></label>
                            <input type="text" name="name" id="name-field" class="form-control" required=""
                                placeholder="Nama">
                        </div>
                        <div class="col-md-12">
                            <label for="subject-field" class="pb-2"></label>
                            <input type="email" class="form-control" name="subject" id="subject-field" required=""
                                placeholder="Email">
                        </div>

                        <div class="col-md-12">
                            <label for="message-field" class="pb-2"></label>
                            <textarea class="form-control" name="message" rows="10" id="message-field" required="" placeholder="Komentar"></textarea>
                        </div>

                        {{-- <div class="col-md-12 text-center ">
                            <button class="buy-btn text-center mt-3" type="submit">Kirim</button>
                        </div> --}}
                        <div class="d-lg-flex justify-content-between col-md-12 text-center">
                            <button type="submit" class="buy-btn text-center mt-3">Kirim</button>
                            <a href="/kontak/list-tamu" class="buy-btn text-center mt-3" style="margin: 0">Daftar Tamu</a>
                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </section>
    </main>

@endsection
