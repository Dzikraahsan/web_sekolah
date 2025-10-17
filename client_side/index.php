<?php

// koneksi ke DB
include 'config.php';

// hitung jumlah guru
$queryGuru = mysqli_query($conn, "SELECT COUNT(*) as total FROM data_guru");
$dataGuru = mysqli_fetch_assoc($queryGuru);
$jumlahGuru = $dataGuru['total'];

// hitung jumlah siswa
$querySiswa = mysqli_query($conn, "SELECT COUNT(*) as total FROM data_siswa");
$dataSiswa = mysqli_fetch_assoc($querySiswa);
$jumlahSiswa = $dataSiswa['total'];

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$namaUser = $_SESSION['nama_user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>Admin Panel</title>

    <!-- ikon -->
    <link rel="shortcut icon" href="https://smkn1maja.sch.id/src\logo\logo-smk.png" />

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="index.css">

    <!-- aos CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- aos JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>
<body data-aos="fade-in">

<!-- Content -->
<div class="d-flex kontainer" style="min-height: 100vh;">

  <?php include 'sidebar.php'; ?>

  <div class="flex-grow-1 p-4">

    <div class="marquee-wraper mb-4">
      <div class="marquee-content">
        <h3 class="fw-bold">Selamat Datang di halaman data!</h3>
      </div>
    </div>

    <!-- Card Menu -->
    <div class="row mb-4 menu g-4">
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h5 class="card-title">Guru</h5>
            <p class="card-text">Lihat data guru sekolah.</p>
            <a href="dataguru.php" class="btn dynamic-btn btn-sm">Lihat</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h5 class="card-title">Siswa</h5>
            <p class="card-text">Lihat data siswa sekolah.</p>
            <a href="datasiswa.php" class="btn dynamic-btn btn-sm">Lihat</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Statistik -->
    <div class="row statistik g-4 mt-3">
      <div class="col-md-4">
        <div class="card2 text-white shadow-sm text-center p-4" style="background: #031716;">
          <h6>Jumlah Guru</h6>
          <div class="stat-number fw-bold fs-2" data-target="<?php echo $jumlahGuru; ?>">
            <?php echo $jumlahGuru; ?>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card2 text-white shadow-sm text-center p-4" style="background: #002f49;">
          <h6>Jumlah Siswa</h6>
          <div class="stat-number fw-bold fs-2" data-target="<?php echo $jumlahSiswa; ?>">
            <?php echo $jumlahSiswa; ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

  // initial aos
  AOS.init({
    offset: 50,
    duration: 600,
    easing: 'ease-in-out',
    once: true
  });

</script>

</body>
</html>
