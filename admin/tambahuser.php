<?php

include 'config.php';

if (isset($_POST['simpan'])) {
    $nama_user  = $_POST['nama_user'];
    $email      = $_POST['email'];
    $passw      = $_POST['passw'];

    $query = "INSERT INTO data_user (nama_user, email, passw)
              VALUES ('$nama_user', '$email', '$passw')";
    mysqli_query($conn, $query);

    header("Location: datauser.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Data User</title>

    <!-- ikon -->
    <link rel="shortcut icon" href="https://smkn1maja.sch.id/src\logo\logo-smk.png" />

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- aos CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- aos JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Style css -->
    <link rel="stylesheet" href="tambahuser.css">

     <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body class="bg-light" data-aos="fade-in">

    <!-- Form Tambah User -->
        <div class="d-flex">

            <div class="col-md-3 col-lg-2 p-0">
                <?php include 'sidebar.php'; ?>
            </div>

            <div class="container p-5 rounded mb-5 mt-4" style="width: 75%; height: max-content; margin: 0 auto; display: block;">
                <h4 class="fw-bold text-center mb-5">Tambah Data User</h4>

                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label">Nama User</label>
                        <input type="text" name="nama_user" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3 position-relative">
                        <label class="form-label">Password</label>
                        <input type="password" id="password" name="passw" class="form-control" required>

                        <i class="bi bi-eye-slash position-absolute" id="togglePassword"
                            style="top: 72.5%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                        </i>
                    </div>

                    <button type="submit" name="simpan" class="btn dynamic-btn">Simpan</button>
                    <a href="datauser.php" class="btn dynamic-btn">Kembali</a>

                </form>

            </div>
        </div>

<script>

    // initial aos
    AOS.init({
        offset: 50,
        duration: 600,
        easing: 'ease-in-out',
        once: true
    });

    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });

</script>

</body>
</html>