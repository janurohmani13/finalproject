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
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white ml-3 px-4" href="paketbelajar.php">Daftar Sekarang</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Divider -->
    <div class="divider"></div>

    <!-- Paket Belajar Section -->
    <section class="container my-5">
        <h2 class="text-center mb-5">Paket Belajar Bimbel Rahma</h2>
        <div class="row">
            <!-- Paket Bronze -->
            <div class="col-md-4 mb-4">
                <div class="card package-card">
                    <img src=".\img\kursus.jpeg" alt="Paket Bronze" class="package-image">
                    <div class="package-header">
                        <h3 class="text-center">Paket Bronze</h3>
                    </div>
                    <div class="package-body">
                        <p class="package-price text-center">Rp 500.000 <small>/bulan</small></p>
                        <ul class="feature-list">
                            <li>4x pertemuan per bulan</li>
                            <li>Durasi 90 menit per pertemuan</li>
                            <li>Materi pelajaran sekolah</li>
                            <li>Tutor berpengalaman</li>
                            <li>Kelas offline</li>
                        </ul>
                        <a href="paketbelajar1.php" class="btn btn-primary btn-block mt-4">Pilih Paket</a>
                    </div>
                </div>
            </div>
            
            <!-- Paket Silver -->
            <div class="col-md-4 mb-4">
                <div class="card package-card">
                    <img src=".\img\kursus.jpeg" alt="Paket Silver" class="package-image">
                    <div class="package-header">
                        <h3 class="text-center">Paket Silver</h3>
                    </div>
                    <div class="package-body">
                        <p class="package-price text-center">Rp 750.000 <small>/bulan</small></p>
                        <ul class="feature-list">
                            <li>8x pertemuan per bulan</li>
                            <li>Durasi 120 menit per pertemuan</li>
                            <li>Materi pelajaran sekolah</li>
                            <li>Tutor berpengalaman</li>
                            <li>Kelas offline dan online</li>
                            <li>Modul latihan tambahan</li>
                        </ul>
                        <a href="paketbelajar2.php" class="btn btn-primary btn-block mt-4">Pilih Paket</a>
                    </div>
                </div>
            </div>
            
            <!-- Paket Gold -->
            <div class="col-md-4 mb-4">
                <div class="card package-card">
                    <img src=".\img\kursus.jpeg" alt="Paket Gold" class="package-image">
                    <div class="package-header">
                        <h3 class="text-center">Paket Gold</h3>
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
    </script>
</body>
</html>
