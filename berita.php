<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Berita Sekolah</title>

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
    <link rel="stylesheet" href="berita.css">

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
                    <img width="45" height="40" style=" filter: brightness(150%) contrast(110%) saturate(100%);" src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1755931878/logo_smkn_1_maja_no_bg_gxofqf.png" alt="Logo SMKN 1 Maja">
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

                        <a class="btn dynamic-btn" type="button" href="dashboard.php"><i class="fa fa-user"></i></a>

                </div>
            </div>
        </nav>

        <!-- Section Detail Berita -->
        <section class="container py-3 dis" data-aos="fade-in">
            <div class="row g-4 align-items-center">
                <h2 class="fw-bold berita text-center mt-5">Berita</h2>

                <!-- Gambar Berita -->
                <div class="col-md-6">
                <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756639798/Salah_satu_dokumentasi_siswa_saat_ujian_sekolah_vao6kc.jpg"
                    alt="Gambar Berita"
                    class="img-fluid rounded shadow-sm">
                </div>

                <!-- Deskripsi Berita -->
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3">Uji Kompetensi Siswa Kelas 12 Semester 1</h3>
                    <p class="text-muted mb-2"><i class="bi bi-calendar-event"></i> 6 Oktober 2025 </p>
                    <p class="lead">
                        Uji kompetensi siswa yang akan dilaksanakan pada tanggal 6 Oktober 2025.
                        Siswa diwajibkan untuk mengikuti kegiatan ujikom ini, untuk mengukur pencapaian kompetensi siswa sesuai dengan bidang keahlian yang ditempuh,
                        memastikan kesiapan siswa memasuki dunia kerja, serta sebagai sarana unjuk kemampuan yang dapat menjadi bukti kompetensi yang diakui industri,
                        dan meningkatkan daya saing lulusan.
                    </p>
                </div>
            </div>
        </section>

        <!-- 2 -->
        <section class="container py-3 dis">
            <div class="row g-4 align-items-center">
                <!-- Gambar Berita -->
                <div class="col-md-6">
                <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1758590157/Maulid_gmzsgr.png"
                    alt="Gambar Berita"
                    class="img-fluid rounded shadow-sm">
                </div>

                <!-- Deskripsi Berita -->
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3">Memperingati Maulid Nabi Muhammad</h3>
                    <p class="text-muted mb-2"><i class="bi bi-calendar-event"></i> 12 September 2025 </p>
                    <p class="lead">
                        Acara dalam rangka memeperingati hari kelahiran baginda Nabi Muhammad SAW.
                        yang dilaksanakan pada tanggal 12 September di lapangan sekolah. Acara ini berlangsung
                        mulai dari pukul 08:00 hingga 10:45. Kegiatan diawali dengan pembukaan, sambutan  dari kepala sekolah,
                        komite, kesiswaan, dan jajaran lainnya, dilanjut dengan tausyiah dari Kyai, dan diakhiri dengan do'a bersama.
                    </p>
                </div>
            </div>
        </section>

        <!-- 3 -->
        <section class="container py-3">
            <div class="row g-4 align-items-center">
                <!-- Gambar Berita -->
                <div class="col-md-6">
                <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1756639779/6_Million_Children_Targeted_to_Get_Free_Nutritious_Meal_by_April_2025_kisfa6.jpg"
                    alt="Gambar Berita"
                    class="img-fluid rounded shadow-sm">
                </div>

                <!-- Deskripsi Berita -->
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3">Program Makan Siang Bergizi Gratis</h3>
                    <p class="text-muted mb-2"><i class="bi bi-calendar-event"></i> 1 September 2025 </p>
                    <p class="lead">
                        Program Makan siang bergizi gratis bagi siswa, yang sudah dilaksanakan sejak 1 September kemarin,
                        merupakan bagian dari program presiden Prabowo Subianto, yang diharapkan program ini meningkatkan kesehatan dan gizi masyarakat,
                        terutama anak-anak sekolah, ibu hamil, dan balita, dengan tujuan menciptakan generasi yang sehat, cerdas, dan produktif untuk mendukung visi Indonesia Emas 2045.
                    </p>
                </div>
            </div>
        </section>

        <div>
            <a href="beranda.php#berita" class="btn dynamic-btn mb-5 mt-5" style="margin: 0 auto; display: block;">Kembali ke Beranda</a>
        </div>

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
