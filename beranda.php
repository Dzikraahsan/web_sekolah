<?php

include 'config.php';

// hitung jumlah guru
$queryGuru = mysqli_query($conn, "SELECT COUNT(*) as total FROM data_guru");
$dataGuru = mysqli_fetch_assoc($queryGuru);
$jumlahGuru = $dataGuru['total'];

// hitung jumlah siswa
$querySiswa = mysqli_query($conn, "SELECT COUNT(*) as total FROM data_siswa");
$dataSiswa = mysqli_fetch_assoc($querySiswa);
$jumlahSiswa = $dataSiswa['total'];

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>Beranda</title>

    <!-- ikon -->
    <link rel="shortcut icon" href="https://smkn1maja.sch.id/src\logo\logo-smk.png" />

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Style css -->
    <link rel="stylesheet" href="beranda.css">

    <!-- Swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Preload font -->
    <link rel="preload" href="fonts/Pretendard-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">

    <!-- font awesome JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

</head>
    <body>

    <!-- Navbar -->
        <nav class="navbar bg-body mx-auto sticky-top">
            <div class="container d-flex align-items-center justify-content-between mt-1">

                <div class="navbar-brand mb-1">
                    <img width="45" height="40" style=" filter: brightness(150%) contrast(110%) saturate(100%);"
                        src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1755931878/logo_smkn_1_maja_no_bg_gxofqf.png"
                        alt="Logo SMKN 1 Maja">
                     <div class="d-flex flex-column text-center">
                        <span class="fw-bold display" style="font-size: 0.8rem;">SMK NEGERI 1 MAJA</span>
                        <small class="text-muted display" style="font-size: 0.575rem;">Sekolah Pusat Keunggulan</small>
                    </div>
                </div>

                <div class="flex-grow-1"></div>

                    <ul class="navbar-nav mx-auto d-flex flex-row mb-2 mb-lg-0 atur">
                        <li class="nav-item box me-5">

                            <a class="nav-link active" href="beranda.php" data-i18n="nav-profile">Beranda</a>
                        </li>

                        <li class="nav-item box me-5">
                            <a class="nav-link active" href="profil.php" data-i18n="nav-project">Profil Sekolah</a>
                        </li>

                        <li class="nav-item box me-5">
                            <a class="nav-link active" href="ekstra.php" data-i18n="nav-contact">Ekstrakulikuler</a>
                        </li>

                        <li class="nav-item box me-5">
                            <a class="nav-link active" href="galeri.php" data-i18n="nav-contact">Galeri</a>
                        </li>

                        <li class="nav-item box me-5">
                            <a class="nav-link active" href="kontak.php" data-i18n="nav-contact">Kontak</a>
                        </li>

                    </ul>

                    <div class="input-group me-5 justify-content-end display" style="max-width: 180px; opacity: 100%;">
                        <input type="text" id="searchInput" class="form-control" placeholder="Cari">
                        <button class="btn dynamic-btn" type="button" onclick="goToSection()">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>

                        <a class="btn dynamic-btn" type="button" href="admin/dashboard.php"><i class="fa fa-user"></i></a>

                </div>
            </div>
        </nav>

        <!-- Hero -->
        <section id="hero" class="py-5 container2 bs-body">
            <div class="text-center text-white mt-5 wipe-fancy" style="padding-top: 5rem;">
                <h1 class="display-4 fancy-wipe">Selamat Datang di SMK Negeri 1 Maja</h1>
                <p class="lead fancy-wipe">Menunjukan Generasi Unggul yang Berkarakter, Berprestasi, dan Berwawasan Global</p>
                <div class="d-flex justify-content-center gap-3">
                <a href="profil.php" class="btn dynamic-btn2">
                    <i class="fas fa-book-open me-2"></i>Selengkapnya...
                </a>
                </div>
            </div>
        </section>

        <!-- Berita kegiatan -->
        <section id="berita" class="py-5 mt-5 bs-body">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold">Berita Kegiatan</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card bg-body">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756639798/Salah_satu_dokumentasi_siswa_saat_ujian_sekolah_vao6kc.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">UJI KOMPETENSI SISWA KELAS 12 SEMESTER 1</h5>
                                <p class="card-text fw-light">Uji Kompetensi siswa yang akan dilaksanakan pada bulan Oktober mendatang.</p>
                                <a href="berita.php" class="btn dynamic-btn">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-body">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1758590157/Maulid_gmzsgr.png" class="card-img-top" style="height: 200px" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">MEMPERINGATI MAULID NABI MUHAMMAD SAW.</h5>
                                <p class="card-text fw-light">Acara yang diselenggarakan untuk memperingati Maulid Nabi Muhammad SAW.</p>
                                <a href="berita.php" class="btn dynamic-btn">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-body">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756639779/6_Million_Children_Targeted_to_Get_Free_Nutritious_Meal_by_April_2025_kisfa6.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">PROGRAM MAKAN BERGIZI GRATIS BAGI SISWA</h5>
                                <p class="card-text fw-light">Program Makan Bergizi Gratis merupakan salah satu upaya sekolah dalam meningkatkan kualitas pendidikan melalui pemenuhan gizi peserta didik.</p>
                                <a href="berita.php" class="btn dynamic-btn">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Galeri -->
        <section id="galeri" class="container mt-5">
            <h2 class="text-center fw-bold mb-5">Galeri</h2>

            <div id="carouselGaleri" class="carousel slide carousel-fade mt-5 mb-5" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner rounded shadow">

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1759389320/fotbar_kelas_y3io5m.png" class="d-block w-100" alt="Foto 11">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Foto bersama.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1759389314/fotbar_kelas_2_pfmamr.png" class="d-block w-100" alt="Foto 13">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Foto bersama setelah pembagian rapor semester 1.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1759389296/fotbar_kelas_4_tn6yan.png" class="d-block w-100" alt="Foto 12">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Foto bersama setelah pembagian rapor semester 2.</p>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1759389324/fashion_show_tj9yl2.png" class="d-block w-100" alt="Foto 14">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Foto bersama setelah acara fashion show.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1759389311/fotbar_kelas_3_iilqhf.png" class="d-block w-100" alt="Foto 15">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Foto bersama memperingati hari guru.</p>
                        </div>
                    </div>

                    <!-- Tombol navigasi -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselGaleri" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselGaleri" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>
            </div>
        </section>

        <!-- Guru -->
        <div id="guru" class="container py-3 mb-5 mx-auto">
            <h2 class="text-center fw-bold mb-1 py-5">Guru Berpengalaman</h2>
            <div class="row g-4 justify-content-center">
                <?php
                include 'config.php';
                $queryGuru = mysqli_query($conn, "SELECT nama, jabatan FROM data_guru LIMIT 4");

                if (mysqli_num_rows($queryGuru) > 0) {
                    while ($row = mysqli_fetch_assoc($queryGuru)) {
                        ?>
                        <div class="col-md-3 c-a ">
                            <div class="card bg-body">
                                <i class="fa fa-user fa-7x mt-5" style="margin: 0 auto; display: block; color: #232526;"></i>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold"><?= htmlspecialchars($row['nama']); ?></h5>
                                    <p class="card-text fw-light"><?= htmlspecialchars($row['jabatan']); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p class='text-center'>Belum ada data guru.</p>";
                }
                ?>
            </div>
        </div>

       <!-- Statistik Guru & Siswa -->
        <div id="statistik" class="container mt-5 mb-4 py-5">
            <h2 class="mb-5 fw-bold text-center">Statistik Guru & Siswa</h2>

            <div class="row justify-content-center text-center g-4">
                <!-- Jumlah Guru -->
                <div class="col-10 col-sm-6 col-md-4">
                    <div class="cardd text-white shadow-sm" style="background: #031716;">
                        <div class="card-body py-4">
                            <i class="fa-solid fa-users fa-5x mb-4 mt-3"></i>
                            <h5 class="fw-semibold">Jumlah Guru</h5>
                            <div class="stat-number fw-bold fs-2" data-target="<?php echo $jumlahGuru; ?>">
                                <?php echo $jumlahGuru; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jumlah Siswa -->
                <div class="col-10 col-sm-6 col-md-4">
                    <div class="cardd text-white shadow-sm" style="background: #002f49;">
                        <div class="card-body2 py-4">
                            <i class="fa-solid fa-users fa-5x mb-4 mt-3"></i>
                            <h5 class="fw-semibold">Jumlah Siswa</h5>
                            <div class="stat-number fw-bold fs-2" data-target="<?php echo $jumlahSiswa; ?>">
                                <?php echo $jumlahSiswa; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ekstrakulikuler -->
        <section id="ekskul" class=" bs-body py-5">
            <div class="container">
                <h2 class="mb-5 text-center fw-bold">Ekstrakulikuler</h2>
                <div class="row g-4">
                    <div class="col-md-3 c-a">
                        <div class="card">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217656/osis_stemdja_yspuwl.png" class="card-img-top mt-4 mb-3" style="width: 80%; height: 80%; display: block; margin: 0 auto;" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">OSIS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                        <div class="card">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217656/paskibra_p2bu2y.jpg" class="card-img-top mt-4 mb-3" style="width: 80%; height: 80%; display: block; margin: 0 auto;" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">PASKIBRA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                        <div class="card">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217655/ambalan_fib5dx.png" class="card-img-top mt-4 mb-3" style="width: 80%; height: 80%; display: block; margin: 0 auto;" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">PRAMUKA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                         <div class="card">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217656/pks_payrou.png" class="card-img-top mt-4 mb-3" style="width: 80%; height: 80%; display: block; margin: 0 auto;" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">PKS</h5>
                            </div>
                        </div>
                    </div>
                        <a href="ekstra.php" class="btn dynamic-btn mt-5" style="margin: 0 auto; display: block;"><i class="fas fa-book-open me-2"></i>Selengkapnya</a>
                </div>
            </div>
        </section>

        <!-- Jurusan -->
        <h2 class="text-center fw-bold mt-5">Program Kejuruan</h2>

        <section id="jurusan" class=" bs-body py-5 mb-5 mt-3">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-3 c-a">
                        <div class="card card1">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756623231/RPL_fixed_zrwm7e.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Rekayasa Perangkat Lunak</h5>
                            </div>
                         </div>
                     </div>
                    <div class="col-md-3 c-a">
                        <div class="card card2">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756636199/TKJ_fixed_l23mcn.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Teknik Komputer & Jaringan</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                        <div class="card card3">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756700221/TE_de3ls9.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Teknik Audio Video Elektronika</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 c-a">
                        <div class="card card4">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756636186/ATPH_fixed_j9qneq.png" class="card-img-top mb-3" alt="">
                            <div class="card-body text-center">
                                <h5 id="atph" class="card-title fw-bold">Agribisnis Tanaman Pangan dan Hortikultura</h5>
                            </div>
                        </div>
                    </div>
                    <a href="profil.php#jurusan" class="btn dynamic-btn mt-5" style="margin: 0 auto; display: block;"><i class="fas fa-book-open me-2"></i>Selengkapnya</a>
                </div>
            </div>
        </section>

        <!-- Testimoni Alumni -->
        <section id="testimoni" class="container py-5 mb-5">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="fw-bold">Testimoni Alumni</h2>
                    <hr class="border border-dark border-1 b-line opacity-100"
                        style="width: 15.25rem;">
                </div>
                </div>

                <div class="row align-items-center g-4">
                <!-- Kiri -->
                <div class="col-md-7">
                    <div class="testimoni-box">
                    <p class="mb-0 mt-3 test">
                       SMKN 1 Maja membentuk saya menjadi seorang generasi milenial yang tidak hanya dibekali dengan dasar ilmu pengetahuan dan teknologi yang berkualitas, tetapi juga diperkaya dengan nilai iman dan taqwa yang kuat.
                       Perpaduan antara penguasaan IPTEK dan pembinaan karakter spiritual tersebut menjadi fondasi penting dalam perjalanan saya, sehingga mampu menghadirkan pribadi yang utuh, berintegritas, serta siap menghadapi berbagai tantangan.
                       Dengan bekal tersebut, saya merasa lebih percaya diri untuk berkembang menjadi individu yang paripurna, berkompetensi tinggi, sekaligus tetap menjunjung akhlak mulia sebagai landasan dalam setiap langkah kehidupan maupun karier.
                    </div>
                </div>

            <!-- Kanan -->
                <div class="col-md-5 text-center">
                    <div class="alumni-photo mb-3">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757501644/Riyad_Mahrez_shb3tg.png" alt="Riyad Mahrez">
                    </div>
                    <h5 class="fw-semibold mb-0">Riyad Mahrez</h5>
                    <small class="text-muted">Pesepakbola Profesional</small>
                </div>
            </div>
        </section>

    <!-- footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Informasi -->
                    <div class="col-md-3 mb-3">
                      <h5>Informasi</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">PPDB</a></li>
                            <li><a href="#">LMS</a></li>
                            <li><a href="#">LSP-P1</a></li>
                            <li><a href="#">E-Arsip Surat</a></li>
                            <li><a href="#">Kalender Pendidikan</a></li>
                        </ul>
                    </div>

                    <!-- Alumni -->
                    <div class="col-md-3 mb-3">
                      <h5>Alumni</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Grup Alumni</a></li>
                            <li><a href="#">Lowongan Kerja</a></li>
                            <li><a href="#">Kelulusan</a></li>
                            <li><a href="#">Testimoni</a></li>
                        </ul>
                    </div>

                    <!-- Komunitas -->
                    <div class="col-md-3 mb-3">
                      <h5>Komunitas & Link</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Kemdikbud</a></li>
                            <li><a href="#">Disdik Jabar</a></li>
                            <li><a href="#">Pemprov Jabar</a></li>
                            <li><a href="#">Pemkab Majalengka</a></li>
                        </ul>
                    </div>

                    <!-- Kontak -->
                    <div class="col-md-3 mb-3">
                      <h5>Kontak</h5>
                        <p>Jl. Pasukan Sindangkasih No. 155, Maja Selatan, kab. Majalengka</p>
                        <p>(0233) 282480</p>
                        <p>smkn1maja@yahoo.com</p>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Bottom -->
                <div class="footer-bottom">
                    <p class="mt-4 mb-0">@ 2025 SMK NEGERI 1 MAJA. ALL RIGHTS RESERVED | By: DZIKRA</p>
                </div>
            </div>
        </footer>

    <script>

        // initial aos
        AOS.init({
            offset: 50,
            duration: 600,
            easing: 'ease-in-out',
            once: true
        });

        // untuk nav link
        document.addEventListener("DOMContentLoaded", () => {
            const currentPage = window.location.pathname.split("/").pop();
            const links = document.querySelectorAll(".nav-link");

            links.forEach(link => {
            if(link.getAttribute("href") === currentPage){
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
            });
        });

        // carousel
        document.addEventListener("DOMContentLoaded", function () {
            const track = document.querySelector('.carousel-track');
            const items = document.querySelectorAll('.carousel-item');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');

            let currentIndex = 0;

            function updateCarousel() {
                track.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % items.length;
                updateCarousel();
            });

            prevBtn.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + items.length) % items.length;
                updateCarousel();
            });
        });

        // teks responsive
        function updateText() {
          const atph = document.getElementById("atph");
          if (window.innerWidth < 768) {
            atph.textContent     = "Agribisnis Tanaman Pangan";
          } else {
            atph.textContent     = "Agribisnis Tanaman Pangan dan Hortikultura";
          }
        }

        updateText();
        window.addEventListener("resize", updateText);

        // section id
        function goToSection() {
            let input = document.getElementById("searchInput").value.toLowerCase();

            let sections = {
                "hero": "hero",
                "berita": "berita",
                "galeri": "galeri",
                "guru": "guru",
                "statistik": "statistik",
                "ekskul": "ekskul",
                "jurusan": "jurusan",
                "testimoni": "testimoni"
            };

            if(sections[input]) {
                document.getElementById(sections[input]).scrollIntoView({ behavior: "smooth" });
            } else {
                alert("Bagian tidak ditemukan 😅");
            }
        }

        // navbar
        document.addEventListener("DOMContentLoaded", () => {
        document.querySelector(".navbar").classList.add("show");
        });

        // counter animation
        function animateValue(el, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);

            // Easing function biar smooth (easeOutQuad)
            const easedProgress = 1 - Math.pow(1 - progress, 2);

            el.innerText = Math.floor(easedProgress * (end - start) + start);

            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                el.innerText = end; // pastikan fix di angka target
            }
            };
            window.requestAnimationFrame(step);
        }

        const counters = document.querySelectorAll('.stat-number');
        const section = document.querySelector('#data-guru-siswa');

        const observer = new IntersectionObserver((entries, obs) => {
            if (entries[0].isIntersecting) {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                animateValue(counter, 0, target, 500); // 500ms = 0,5 detik
            });
            obs.unobserve(section); // cuma sekali animasi
            }
        }, { threshold: 0.5 });

        observer.observe(section);

        // GSAP
        document.querySelectorAll(".nav-link").forEach(link => {
            let line = document.createElement("span");
            line.style.position = "absolute";
            line.style.left = "0";
            line.style.bottom = "8px";
            line.style.height = "2px";
            line.style.width = "0";
            line.style.background = "#000";
            line.style.pointerEvents = "none";
            link.style.position = "relative";
            link.appendChild(line);

            // animasi GSAP hover
            link.addEventListener("mouseenter", () => {
                gsap.to(line, { width: "100%", duration: 0.3, ease: "power2.out" });
            });
            link.addEventListener("mouseleave", () => {
                gsap.to(line, { width: "0%", duration: 0.3, ease: "power2.in" });
            });
        });

        // untuk pop up gambar
        const popup = document.getElementById("popup");
        const popupImg = document.getElementById("popupImg");
        const closeBtn = document.getElementById("closeBtn");

        document.querySelectorAll(".swiper-slide img").forEach(img => {
          img.addEventListener("click", () => {
            popup.style.display = "flex";
            popupImg.src = img.src;
          });
        });

        closeBtn.addEventListener('click', () => {
          popup.style.display = 'none';
        });

        popup.addEventListener("click", (e) => {
          if (e.target === popup) {
            popup.style.display = "none";
          }
        });

        // Open popup
        document.querySelectorAll('.swiper-slide img').forEach(img => {
          img.addEventListener('click', () => {
            document.querySelector('.image-popup').style.display = 'flex';
            document.querySelector('.image-popup img').src = img.src;
            document.body.classList.add('popup-open'); // kunci scroll
          });
        });

        // Close popup
        document.querySelector('.image-popup').addEventListener('click', e => {
          if (e.target.tagName !== 'IMG') {
            document.querySelector('.image-popup').style.display = 'none';
            document.body.classList.remove('popup-open'); // balikin scroll
          }
        });

    </script>

</body>
</html>
