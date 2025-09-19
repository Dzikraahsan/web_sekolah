<?php
include 'config.php';

if (!isset($_GET['id'])) {
    header("Location: dataguru.php");
    exit;
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM  data_guru WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

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
    <link rel="stylesheet" href="detailguru.css">

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body data-aos="fade-in"> 

    <div class="d-flex">

        <div class="col-md-3 col-lg-2 p-0">
            <?php include 'sidebar.php'; ?>
        </div>

        <div class="container border border-1 p-5 mb-3 mt-5 bg-light rounded" style="width: 75%; height: max-content; margin: 0 auto; display: block;">
            <h3 class="h3 fw-bold">Detail Guru</h3>

            <div class="detail-wrapper" style="margin: 0 auto; display: block;">
                <div class="row-detail">
                    <div class="label">ID</div>
                    <div class="value"><?= $data['id'] ?></div>
                </div>
                <div class="row-detail">
                    <div class="label">Nama</div>
                    <div class="value"><?= $data['nama'] ?></div>
                </div>
                <div class="row-detail">
                    <div class="label">Jenis Kelamin</div>
                    <div class="value"><?= $data['jenis_kelamin'] ?></div>
                </div>
                <div class="row-detail">
                    <div class="label">Alamat</div>
                    <div class="value"><?= $data['alamat'] ?></div>
                </div>
                <div class="row-detail">
                    <div class="label">Jabatan</div>
                    <div class="value"><?= $data['jabatan'] ?></div>
                </div>
                <div class="row-detail">
                    <div class="label">Status</div>
                    <div class="value"><?= $data['statuss'] ?></div>
                </div>

                <a href="dataguru.php" class="btn dynamic-btn mt-5" style="margin: 0 auto; display: block;">Kembali</a>

            </div>
        </div>
    </div>

<script>
    AOS.init();
</script>
</body>
</html>
