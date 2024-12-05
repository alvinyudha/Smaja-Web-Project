@extends('layouts.template')
@section('title', 'SMA Negeri Arjasa Jember')

@section('content')
  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
        </div>

        <div class="row content">
          <div class="col-lg-8">
            <div class="content-section">
              <img src="{{asset('img/berita1.png')}}" width="90%">
              <h3 class="mt-3">SMAN Arjasa Jember adalah salah satu sekolah penggerak di Jember</h3>
              <p class="article-meta">29 November 2024 | By Admin</p>
              <p>
                Apakah Sekolah Penggerak?
              </p>
              <p>
                Sekolah Penggerak adalah sekolah yang berfokus pada pengembangan hasil belajar siswa secara holistik dengan mewujudkan Profil Pelajar Pancasila yang mencakup kompetensi dan karakter yang diawali dengan SDM yang unggul (kepala sekolah dan guru).
              </p>
              <p>
                Program Sekolah Penggerak akan mengakselerasi sekolah untuk bergerak 1-2 tahap lebih maju dalam waktu 3 tahun Ajaran. Sekolah akan menggunakan kurikulum baru (prototipe) dan akan melaksanakan salah satu programnya STUDY EDUKASI sebagai pemenuhan tugas akhir siswa menyusun LAPORAN. Program Sekolah Penggerak adalah Kolaborasi Kemdikbud dan Pemerintah Daerah yang diikuti oleh PAUD, SD, SMP, SMA, SLB baik negeri maupun swasta. Program Sekolah Penggerak terdiri dari lima intervensi yang saling terkait dan tidak bisa dipisahkan :
              </p>
              <p>
                1. Pendampingan konsultatif dan asimetris. Program kemitraan antara Kemendikbud dan pemerintah daerah dimana Kemendikbud memberikan pendampingan implementasi Sekolah Penggerak.
                <br><br>
                2. Penguatan SDM Sekolah Penguatan Kepala Sekolah, Pengawas Sekolah, Penilik, dan Guru melalui program pelatihan dan pendampingan intensif (coaching) one to one dengan pelatih ahli yang disediakan oleh Kemdikbud.
                <br><br>
                3. Pembelajaran dengan paradigma baru pembelajaran yang berorientasi pada penguatan kompetensi dan pengembangan karakter yang sesuai nilai-nilai Pancasila, melalui kegiatan pembelajaran di dalam dan luar kelas.
                <br><br>
                4. Perencanaan berbasis data manajemen berbasis sekolah: perencanaan berdasarkan refleksi diri sekolah.
                <br><br>
                5. Digitalisasi Sekolah Penggunaan berbagai platform digital bertujuan mengurangi kompleksitas, meningkatkan efisiensi, menambah inspirasi, dan pendekatan yang customized.
              </p>
              <p>
                Siapa saja yang berperan dalam Program Sekolah Penggerak?
                PEMDA, Pelatih ahli & Pengawas, Kepala Sekolah, Komite Pembelajaran Guru, Guru, Murid, Mitra (Perguruan tinggi, lembaga sosial, PEMDA kepala desa, pemimpin, dsb.), Komite Orang Tua, Platform Teknologi (sebagai pendukung).
                Sekolah Penggerak adalah bagian dari ekosistem pendidikan, di jangka panjang semua sekolah akan menjadi Sekolah Penggerak
              </p>
              <!-- Share Section -->
              <p class="mt-4"><strong>Bagikan:</strong></p>
              <div class="share-icons">
                <a href="#"><img src="{{asset('img/facebook.png')}}"></a>
                <a href="#"><img src="{{asset('img/instagram.png')}}"></a>
                <a href="#"><img src="{{asset('img/whatsapp.png')}}"></i></a>
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
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="sidebar-title"><strong>Baca Lainnya</strong></div>
              <hr>
              <ul class="list-unstyled">
                <li><a href="#">Juara Harapan 1 C1 Race Downhill 76</a> <br><small>10 September 2024</small></li>
                <li class="mt-3"><a href="#">Juara 1 Seni Tunggal Pencak Silat Tingkat Nasional 2024</a> <br><small>10 September 2024</small></li>
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