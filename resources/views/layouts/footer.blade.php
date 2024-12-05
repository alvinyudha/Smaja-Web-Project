<?php
// Fungsi untuk mendapatkan IP address
function getUserIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Fungsi untuk menentukan jenis perangkat
function getDeviceType($userAgent)
{
    if (preg_match('/mobile/i', $userAgent)) {
        return 'Mobile';
    } elseif (preg_match('/tablet/i', $userAgent)) {
        return 'Tablet';
    } else {
        return 'Desktop';
    }
}

// Inisialisasi data
$ipAddress = getUserIP();
$browser = $_SERVER['HTTP_USER_AGENT'];
$deviceType = getDeviceType($browser);
$date = date('d M Y');
$hitsFile = 'stats.txt';

// Membaca data statistik dari file
if (file_exists($hitsFile)) {
    $data = json_decode(file_get_contents($hitsFile), true);
} else {
    $data = [
        'total_visitors' => 0,
        'today_visitors' => 0,
        'total_hits' => 0,
        'today_hits' => 0,
        'visitors' => [],
        'last_visit_date' => $date,
    ];
}

// Reset today_visitors jika hari ini berbeda dari last_visit_date
if ($data['last_visit_date'] !== $date) {
    $data['today_visitors'] = 0; // Reset jumlah pengunjung hari ini
    $data['today_hits'] = 0; // Reset jumlah hits hari ini
    $data['last_visit_date'] = $date; // Update tanggal terakhir
}
// Menambahkan pengunjung baru
if (!in_array($ipAddress, array_column($data['visitors'], 'ip'))) {
    $data['visitors'][] = ['ip' => $ipAddress, 'browser' => $browser, 'device' => $deviceType];
    $data['total_visitors']++;
    $data['today_visitors']++;
}
// Menambah hit
$data['total_hits']++;
$data['today_hits']++;

// Simpan data
file_put_contents($hitsFile, json_encode($data, JSON_PRETTY_PRINT));

?>
<footer id="footer">

    {{-- <div class="footer-top"> --}}
    <div class="footer-newsletter">
        <div class="container">
            <div class="row">

                <div class="col-md-4 footer-contact text-center">
                    <img src="{{ asset('img/footer.png') }}" class="img-fluid animated" alt="">
                    <h3>SMAN ARJASA JEMBER</h3>
                </div>
                <style>
                    .icon {
                        margin-right: 10px;
                        vertical-align: middle;
                        /* Jarak antara ikon dan teks */

                    }

                    p {
                        display: flex;
                        line-height: 1.2;
                    }
                </style>
                <div class="col-md-4 mt-4 mt-lg-0 footer-links" style="padding-left: 50px">
                    <p><i class="bx bx-mail-send icon"></i> smaarjasa@yahoo.co.id</p>
                    <p><i class="bx bx-phone icon"></i> (0331)-540133</p>
                    <p>
                        <i class="bx bx-home-alt icon"></i> Jl. Sultan Agung No.64, Krajan, Arjasa, Kec. Arjasa,
                        Kabupaten Jember, Jawa Timur 68191
                    </p>
                    <h4>SMA Negeri Arjasa Jember Social Media</h4>
                    <div class="social-links mt-3">
                        <a href="https://x.com/smajaku" class="twitter" target="_blank" rel="noopener noreferrer"><i
                                class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/smaja.jember/?hl=id" class="instagram" target="_blank"
                            rel="noopener noreferrer"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCNboWKzyb-M1HMQkFL7QKqg/featured"
                            class="google-plus"target="_blank" rel="noopener noreferrer"><i
                                class="bx bxl-youtube"></i></a>
                    </div>
                </div>

                <div class="col-md-4 mt-4 mt-lg-0 footer-links" style="padding-left: 50px">

                    <li style="margin-bottom: 12px; list-style-type: none; "><i class="ri-group-line icon"></i> Total
                        Pengunjung:
                        <strong><?= $data['total_visitors'] ?></strong>
                    </li>
                    <li style="margin-bottom: 12px; list-style-type: none; "><i class="ri-user-smile-line icon"></i>
                        Pengunjung Hari Ini:
                        <strong><?= $data['today_visitors'] ?></strong>
                    </li>
                    <li style="margin-bottom: 12px; list-style-type: none; "><i class="ri-user-heart-line icon"></i>
                        Total Hits:
                        <strong><?= $data['total_hits'] ?></strong>
                    </li>
                    <li style="margin-bottom: 12px; list-style-type: none; "><i class="ri-user-star-line icon"></i> Hits
                        Hari Ini:
                        <strong><?= $data['today_hits'] ?></strong>
                    </li>
                    <li style="margin-bottom: 12px; list-style-type: none; "><i class="ri-map-pin-3-line icon"></i> IP
                        Address Anda:
                        <strong><?= $ipAddress ?></strong>
                    </li>
                    <li style="margin-bottom: 12px; list-style-type: none; "><i class="ri-device-line icon"></i>
                        Perangkat Yang Digunakan:
                        <strong><?= $deviceType ?></strong>
                    <li style="margin-bottom: 12px; list-style-type: none; "><i class="ri-window-line icon"></i> Browser
                        Anda:
                        <strong><?= $browser ?></strong>
                    </li>
                    </li>

                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix text-center">
        2024 Hak Cipta, SMA Negeri Arjasa Jember
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
