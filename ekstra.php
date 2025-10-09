<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Ekstrakulikuler</title>

    <!-- ikon -->
    <link rel="shortcut icon" href="https://smkn1maja.sch.id/src\logo\logo-smk.png" />

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <!-- aos CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- aos JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Style css -->
    <link rel="stylesheet" href="ekstra.css">

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

                        <a class="btn dynamic-btn" type="button" href="client_side/index.php"><i class="fa fa-user"></i></a>

                </div>
            </div>
        </nav>

    <!-- Ekstrakulikuler -->
        <section id="ekskul" class=" bs-body mb-5 mt-5">
            <div class="container">
                <h2 class="mb-5 text-center fw-bold">Ekstrakulikuler</h2>
                <div class="row g-4">

                <div class="col-md-3 c-a">
                    <div class="card card1">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217656/osis_stemdja_yspuwl.png"
                            class="card-img-top mt-4 mb-3"
                            style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                            alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">OSIS</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 c-a">
                    <div class="card card2">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217656/paskibra_p2bu2y.jpg"
                            class="card-img-top mt-4 mb-3"
                            style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                            alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">PASKIBRA</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 c-a">
                    <div class="card card3">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217655/ambalan_fib5dx.png"
                            class="card-img-top mt-4 mb-3"
                            style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                            alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">PRAMUKA</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 c-a">
                        <div class="card card4">
                        <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217656/pks_payrou.png"
                            class="card-img-top mt-4 mb-3"
                            style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                            alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">PKS</h5>
                        </div>
                    </div>
                </div>

                    <div class="col-md-3 c-a">
                        <div class="card card1 mt-5">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217655/pmi_jqnrpb.jpg"
                                class="card-img-top mt-4 mb-3"
                                style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                                alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">PMR</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 c-a">
                        <div class="card card2 mt-5">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217658/pecinta_alam_rbnr1b.png"
                                class="card-img-top mt-4 mb-3"
                                style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                                alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">PECINTA ALAM</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 c-a">
                        <div class="card card3 mt-5">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217656/voli_nofq1v.jpg"
                                class="card-img-top mt-4 mb-3"
                                style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                                alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">VOLI</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 c-a">
                         <div class="card card4 mt-5">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217655/jurnalis_r6z53k.jpg"
                                class="card-img-top mt-4 mb-3"
                                style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                                alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">JURNALIS</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 c-a">
                        <div class="card card1 mt-5">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217655/japan_club_phgsg9.jpg"
                                class="card-img-top mt-4 mb-3"
                                style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                                alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">JAPANESE CLUB</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 c-a">
                        <div class="card card2 mt-5">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217655/english_club_coyzvr.jpg"
                                class="card-img-top mt-4 mb-3"
                                style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                                alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">ENGLISH CLUB</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 c-a">
                        <div class="card card3 mt-5">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217654/basket_dm4sa4.jpg"
                                class="card-img-top mt-4 mb-3"
                                style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                                alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">BASKET</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 c-a">
                         <div class="card card4 mt-5">
                            <img src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757217654/badminton_j6akjd.jpg"
                                class="card-img-top mt-4 mb-3"
                                style="width: 80%; height: 80%; display: block; margin: 0 auto;"
                                alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">BULU TANGKIS</h5>
                            </div>
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

        // swiper photo
        const swiper1 = new Swiper(".mySwiper1", {
          slidesPerView: 1,
          spaceBetween: 20,
          navigation: {
            nextEl: ".next1",
            prevEl: ".prev1",
          },
          grabCursor: true,
          breakpoints: {
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
          },
        });

        const swiper2 = new Swiper(".mySwiper2", {
          slidesPerView: 1,
          spaceBetween: 20,
          navigation: {
            nextEl: ".next2",
            prevEl: ".prev2",
          },
          grabCursor: true,
          breakpoints: {
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
          },
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
