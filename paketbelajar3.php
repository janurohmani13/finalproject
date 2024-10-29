<?php
// Start the session
session_start();

// Include any necessary PHP files or database connections here
//include 'config.php';

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=".\img\BIMBELRAHMA.png" sizes="32x32">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <title>Paket Belajar - Bimbel Rahma</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
             max-width: 1200px; /* Sesuaikan dengan kebutuhan */
             margin: 0 auto;    /* Mengatur navbar berada di tengah */

        }
        .navbar-brand img {
            height: 100px; /* Increased from 50px to 80px */
        }
        .nav-link {
            color: #333 !important;
            font-weight: 600;
        }
        .nav-link:hover {
            color: #ff9800 !important;
        }
        .btn-primary {
            background-color: #ff9800;
            border-color: #ff9800;
        }
        .btn-primary:hover {
            background-color: #e68a00;
            border-color: #e68a00;
        }
        .divider {
            height: 2px;
            background-color: #ff9800;
            margin: 20px 0;
        }
        .package-card {
            border: none;
            transition: transform 0.3s;
        }
        .package-card:hover {
            transform: translateY(-10px);
        }
        .package-header {
            background-color: #ff9800;
            color: white;
            padding: 20px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .package-body {
            padding: 20px;
        }
        .package-price {
            font-size: 2rem;
            font-weight: bold;
            color: #ff9800;
        }
        .feature-list {
            list-style-type: none;
            padding-left: 0;
        }
        .feature-list li {
            margin-bottom: 10px;
        }
        .feature-list li:before {
            content: "\f00c";
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            margin-right: 10px;
            color: #ff9800;
        }
        .package-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 50px 0;
        }
        .package-title {
    background-color: #ff9800; /* Ganti dengan warna background */
    background-size: cover;
    background-position: center;
    color: black;
    padding: 20px;
    border-radius: 8px;
    font-weight: bold;
}

    </style>
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light py-0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src=".\img\BIMBELRAHMA.png" alt="Bimbel Rahma Logo" width="300" height="1500"> <!-- Increased width and height -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link px-3" href="index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="tentangkami.php">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="paketbelajar.php">Paket Belajar</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="kontak.php">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white ml-3 px-4" href="login.php">Masuk</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white ml-3 px-4" href="#">Daftar Sekarang</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Divider -->
    <div class="divider"></div>

    <!-- Paket Belajar Section -->
    <section class="container my-5">
    <h2 class="text-center mb-5 package-title">Paket Belajar Bimbel Rahma</h2>
    <div class="row">
         <!-- Paket Gold -->
         <div class="col-md-4 mb-4">
                <div class="card package-card">
                    <img src=".\img\kursus.jpeg" alt="Paket Gold" class="package-image">
                    <div class="package-header">
                        <h3 class="text-center">Paket 1on5</h3>
                    </div>
                    <div class="package-body">
                        <p class="package-price text-center">Rp 1.000.000 <small>/bulan</small></p>
                        <ul class="feature-list">
                            <li>12x pertemuan per bulan</li>
                            <li>Durasi 120 menit per pertemuan</li>
                            <li>Materi pelajaran sekolah</li>
                            <li>Tutor berpengalaman</li>
                            <li>Kelas offline dan online</li>
                            <li>Modul latihan tambahan</li>
                            <li>Konsultasi pribadi</li>
                            <li>Tryout bulanan</li>
                        </ul>
                        <a href="paketbelajar3.php" class="btn btn-primary btn-block mt-4">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>
            
        <!-- Form Pilihan Section -->
        <div class="col-md-6 mb-4">
            <div class="card package-card">
                <div class="package-header">
                    <h3 class="text-center" style="color: black;">Form Pilihan</h3>
                </div>
                <div class="package-body">
                    <form action="pembayaran.php" method="post">
                        <div class="form-group">
                            <label for="bulan">Bulan Mulai</label>
                            <select name="bulan" id="bulan" class="form-control" required>
                                <option value="">Pilih Bulan</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun Mulai</label>
                            <select name="tahun" id="tahun" class="form-control" required>
                                <option value="">Pilih Tahun</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lama">Lama Belajar (Bulan)</label>
                            <select name="lama" id="lama" class="form-control" required>
                                <option value="">Pilih Lama Belajar</option>
                                <option value="1">1 Bulan</option>
                                <option value="2">2 Bulan</option>
                                <option value="3">3 Bulan</option>
                                <option value="4">4 Bulan</option>
                                <option value="5">5 Bulan</option>
                                <option value="6">6 Bulan</option>
                                <option value="7">7 Bulan</option>
                                <option value="8">8 Bulan</option>
                                <option value="9">9 Bulan</option>
                                <option value="10">10 Bulan</option>
                                <option value="11">11 Bulan</option>
                                <option value="12">12 Bulan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tingkat">Tingkat Pendidikan</label>
                            <select name="tingkat" id="tingkat" class="form-control" required>
                                <option value="">Pilih Tingkat Pendidikan</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="kelas" id="kelas" class="form-control" required>
                                <option value="">Pilih Kelas</option>
                            </select>
                        </div>
                        <script>
                            document.getElementById('tingkat').addEventListener('change', function() {
                                var tingkat = this.value;
                                var kelasSelect = document.getElementById('kelas');
                                kelasSelect.innerHTML = '<option value="">Pilih Kelas</option>';
                                var currentDate = new Date();
                                var currentMonth = currentDate.getMonth() + 1; // JavaScript months are 0-indexed, add 1 to get the correct month number
                                var nextMonth = currentMonth + 1; // Determine the next month
                                if (tingkat === 'SD') {
                                    for (var i = 1; i <= 6; i++) {
                                        kelasSelect.options[kelasSelect.options.length] = new Option('Kelas ' + i, i);
                                    }
                                } else if (tingkat === 'SMP') {
                                    for (var i = 7; i <= 9; i++) {
                                        kelasSelect.options[kelasSelect.options.length] = new Option('Kelas ' + i, i);
                                    }
                                } else if (tingkat === 'SMA') {
                                    for (var i = 10; i <= 12; i++) {
                                        kelasSelect.options[kelasSelect.options.length] = new Option('Kelas ' + i, i);
                                    }
                                }
                                // Dynamically set the selected option based on the next month
                                if (nextMonth <= 12) { // Ensure next month is within the same year
                                    kelasSelect.value = nextMonth;
                                } else { // If next month is January, set the selected option to January
                                    kelasSelect.value = 1;
                                }
                                // Show notification to select for the next month
                                if (currentMonth !== 12) { // If it's not December
                                    alert('Silahkan pilih untuk bulan depan');
                                }
                            });
                        </script>
                        <div class="form-group">
                            <label for="kurikulum">Kurikulum</label>
                            <select name="kurikulum" id="kurikulum" class="form-control" required>
                                <option value="">Pilih Kurikulum</option>
                                <option value="Kurikulum 2013">Kurikulum 2013</option>
                                <option value="Kurikulum 2018">Kurikulum 2018</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Pilih Paket</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <h4>Rincian Harga</h4>
            <p>Di sini akan muncul rincian harga berdasarkan pilihan yang Anda pilih.</p>
        </div>
    </div>
</section>

   <!-- Footer -->
   <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="background-color: white; padding: 5px;">
                        <img src=".\img\BIMBELRAHMA.png" alt="Bimbel Rahma Logo" width="300" height="80" style="max-height: 100px;">
                    </div>
                    <h4>Bimbel Rahma</h4>
                    <p>Jl. Citra Kebun Mas R16 No.01, Bengle, Kec. Majalaya, Karawang, Jawa Barat 41371</p>
                </div>
                <div class="col-md-4">
                    <h4>Hubungi Kami</h4>
                    <p>Email: bimbelrahmakarawang@gmail.com</p>
                    <p>Telepon: 0812-2222-9056</p>
                </div>
                <div class="col-md-4">
                    <h4>Ikuti Kami</h4>
                    <a href="https://www.facebook.com/profile.php?id=100066394995272&mibextid=LQQJ4d" class="text-white mr-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/bimbelrahmakarawang/" class="text-white mr-3"><i class="fab fa-instagram"></i></a>
                    <a href="mailto:bimbelrahmakarawang@gmail.com" class="text-white"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <hr>
            <p class="text-center">&copy; 2024 Bimbel Rahma. All rights reserved.</p>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>