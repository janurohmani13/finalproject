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
    <title>Tentang Kami - Bimbel Rahma</title>
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
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ff9800;
            margin-bottom: 2rem;
        }
        .about-content {
            font-size: 1.1rem;
            line-height: 1.8;
        }
        .feature-box {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }
        .feature-box:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .feature-icon {
            font-size: 3rem;
            color: #ff9800;
            margin-bottom: 1rem;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 50px 0;
        }
        .orange-box {
            background-color: #ff9800;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: justify;
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

    <main class="container my-5">
        <section class="mb-5">
            <h1 class="section-title text-center">Tentang Bimbel Rahma</h1>
            <div class="row">
                <div class="col-lg-6">
                    <img src=".\img\BIMBELRAHMA.png" alt="Bimbel Rahma" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <div class="orange-box">
                        <p class="about-content">
                            Bimbel Rahma adalah lembaga bimbingan belajar yang berkomitmen untuk membantu siswa mencapai potensi terbaik mereka. Dengan pengalaman lebih dari 10 tahun, kami telah membantu ribuan siswa meraih kesuksesan akademis dan mempersiapkan mereka untuk masa depan yang cerah.
                        </p>
                        <p class="about-content">
                            Kami percaya bahwa setiap anak memiliki cara belajar yang unik. Oleh karena itu, kami menyediakan metode pembelajaran yang disesuaikan dengan kebutuhan masing-masing siswa, didukung oleh tim pengajar yang berpengalaman dan berkualifikasi tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <h2 class="section-title text-center">Mengapa Memilih Kami?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box text-center">
                        <i class="fas fa-graduation-cap feature-icon"></i>
                        <h3>Pengajar Berkualitas</h3>
                        <p>Tim pengajar kami terdiri dari lulusan universitas terkemuka dengan pengalaman mengajar yang luas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box text-center">
                        <i class="fas fa-book-open feature-icon"></i>
                        <h3>Kurikulum Terkini</h3>
                        <p>Materi pembelajaran kami selalu diperbarui mengikuti perkembangan kurikulum nasional.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box text-center">
                        <i class="fas fa-users feature-icon"></i>
                        <h3>Kelas Kecil</h3>
                        <p>Kami menjaga rasio siswa dan guru yang ideal untuk memastikan setiap siswa mendapat perhatian yang cukup.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title text-center">Visi & Misi</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="orange-box">
                        <h3>Visi</h3>
                        <p class="about-content">Menjadi lembaga bimbingan belajar terdepan yang menghasilkan generasi unggul, berprestasi, dan berakhlak mulia.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="orange-box">
                        <h3>Misi</h3>
                        <ul class="about-content">
                            <li>Menyediakan layanan bimbingan belajar berkualitas tinggi</li>
                            <li>Mengembangkan metode pembelajaran yang inovatif dan efektif</li>
                            <li>Membangun karakter dan kepercayaan diri siswa</li>
                            <li>Mendorong semangat belajar dan kemandirian siswa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
