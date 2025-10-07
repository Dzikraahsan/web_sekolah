<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Galeri</title>

    <!-- ikon -->
    <link rel="shortcut icon" href="https://smkn1maja.sch.id/src\logo\logo-smk.png" />

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- aos CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- aos JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Style css -->
    <link rel="stylesheet" href="galeri.css">

     <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- preload font -->
    <link rel="preload" href="fonts/Pretendard-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">

</head>
<body data-aos="fade-in">

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

        <!-- Galeri -->
        <section id="galeri" class="container py-5">
            <h2 class="text-center fw-bold mb-5">Galeri</h2>

            <div id="carouselGaleri" class="carousel slide carousel-fade mt-5 mb-5">
                <div class="carousel-inner rounded">

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1758348505/PXL_20250813_133739369_t1nkg9.jpg"
                            class="d-block w-100"
                            alt="Foto 1">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Sambutan dari Kepala Seksi bidang Paud & Dikmas.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756558713/PXL_20250819_090638647_q9pzpz.jpg "
                            class="d-block w-100"
                            alt="Foto 2">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Situasi sebelum rapat dimulai.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1758348416/PXL_20250813_155747972_bwmzyc.jpg"
                            class="d-block w-100 h-100"
                            alt="Foto 3">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Sambutan dari Kepala Seksi 2 bidang Paud & Dikmas.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756558720/PXL_20250819_102602059_wfaegn.jpg"
                            class="d-block w-100"
                            alt="Foto 4">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Penjelasan mengenai penggunaan aplikasi Vokasi.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1758350168/PXL_20250814_084712628_r4qbsi.jpg"
                            class="d-block w-100"
                            alt="Foto 5">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Sambutan dari Kepala Seksi bidang Paud & Dikmas.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1758349877/PXL_20250814_084624448_oy21qn.jpg"
                            class="d-block w-100"
                            alt="Foto 6">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Para tetamu yang hadir dalam rapat.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1758348505/PXL_20250813_133739369_t1nkg9.jpg"
                            class="d-block w-100"
                            alt="Foto 7">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Penjelasan masalah oleh Kepala Seksi.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1758350296/PXL_20250814_134917931_lsiokk.jpg"
                            class="d-block w-100"
                            alt="Foto 8">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Sambutan dari Kepala Seksi bidang Paud & Dikmas.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1758350316/PXL_20250814_134741514_-_Copy_e8kr7m.jpg"
                            class="d-block w-100"
                            alt="Foto 9">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Para tetamu yang hadir dalam rapat sesi terakhir.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1758350400/PXL_20250814_160407153_ixw8un.jpg"
                            class="d-block w-100"
                            alt="Foto 10">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Penjelasan masalah oleh bagian Sarana & Prasarana.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1759389320/fotbar_kelas_y3io5m.png"
                            class="d-block w-100"
                            alt="Foto 11">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Foto bersama.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1759389314/fotbar_kelas_2_pfmamr.png"
                            class="d-block w-100"
                            alt="Foto 13">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Foto bersama setelah pembagian rapor semester 1.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1759389296/fotbar_kelas_4_tn6yan.png"
                            class="d-block w-100"
                            alt="Foto 12">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Foto bersama setelah pembagian rapor semester 2.</p>
                        </div>
                    </div>


                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1759389324/fashion_show_tj9yl2.png"
                            class="d-block w-100"
                            alt="Foto 14">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Foto bersama setelah acara fashion show.</p>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1759389311/fotbar_kelas_3_iilqhf.png"
                            class="d-block w-100"
                            alt="Foto 15">
                        <div class="carousel-caption d-block bg-dark bg-opacity-75 p-2 rounded">
                            <p class="mb-0">Foto bersama memperingati hari guru.</p>
                        </div>
                    </div>

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

    <!-- font awesome JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

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

        // navbar
        document.addEventListener("DOMContentLoaded", () => {
        document.querySelector(".navbar").classList.add("show");
        });

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

    </script>

</body>
</html>
