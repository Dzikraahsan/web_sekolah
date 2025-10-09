<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pesan = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO saran (nama, email, pesan, created_at)
            VALUES ('$nama', '$email', '$pesan', NOW())";

    if (mysqli_query($conn, $sql)) {
        $status = "success";
    } else {
        $status = "error";
    }

    header("Location: kontak.php?status=$status");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Kontak</title>

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
    <link rel="stylesheet" href="kontak.css">
    <link rel="preload" href="sahar/Pretendard-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">

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

        <!-- Saran -->
        <div class="container mt-5 mb-5">
            <h2 class="text-center fw-bold mb-5">Saran</h2>

                <!-- notifikasi saran -->
                <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
                    <div class="alert alert-success d-inline-block text-center"
                        id="notif"
                        style="position: fixed; top: 60px; left: 50%; transform: translateX(-50%); z-index: 1050;">
                        Pesan berhasil dikirim!
                    </div>
                <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
                    <div class="alert alert-danger d-inline-block text-center"
                        id="notif"
                        style="position: fixed; top: 60px; left: 50%; transform: translateX(-50%); z-index: 1050;">
                        Pesan gagal dikirim, coba lagi.
                    </div>
                <?php endif; ?>

            <!-- From saran -->
            <div class="row g-4">
                <div class="container w-100">
                    <div class="card border border-1 p-3 bg-body-tertiary rounded">
                        <div class="card-body w-100" style="margin: 0 auto; display: block;">
                            <h4 class="mb-4 fw-semibold">Kirim Pesan</h4>
                            <form action="" method="POST">

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                </div>

                                <button type="submit" class="btn dynamic-btn">Kirim</button>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="container my-5">
                    <h3 class="mb-5 mt-5 fw-bold text-center"><i class="fa-solid fa-circle-info" style="color: #002f49;"></i>  Informasi Kontak  </h3>
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="p-4 border rounded-3 h-100 bg-body">
                                <h4 class="fw-bold mb-3"><i class="fa-solid fa-location-dot" style="color: #002f49;"></i> Alamat <i class="fa-solid fa-location-dot" style="color: #002f49;"></i></h4>
                                <h5 class="mb-2 fw-bold"><i class="fa-solid fa-road" style="color: #002f49;"></i>  Jl. Pasukan Sindangkasih No. 155, Maja Selatan</h5>
                                <h5 class="mb-2 fw-bold"><i class="fa-solid fa-phone" style="color: #002f49;"></i>  Telepon: (0233) 282480</h5>
                                <h5 class="mb-2 fw-bold"><i class="fa-brands fa-whatsapp style="color: #002f49;""></i>  WhatsApp: 0812-3456-7890</h5>
                                <div class="ratio ratio-16x9 rounded overflow-hidden mt-5">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.56290937087456!2d108.30591422447624!3d-6.889817811731566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2582bdef062f%3A0x46c05262df72c867!2sSmkn%201%20maja!5e0!3m2!1sid!2sid!4v1758340549043!5m2!1sid!2sid"
                                        width="600"
                                        height="450"
                                        style="border:0;"
                                        allowfullscreen=""
                                        loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
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

        //hide notifikasi
        setTimeout(() => {
            let notif = document.getElementById("notif");
            if (notif) {
                notif.style.transition = "opacity 0.5s ease";
                notif.style.opacity = "0";
                setTimeout(() => notif.remove(), 500); // hapus elemen setelah animasi
            }
        }, 5000); // 5000ms = 5 detik

    </script>

</body>
</html>