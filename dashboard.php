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

// hitung jumlah user
$queryUser = mysqli_query($conn, "SELECT COUNT(*) as total FROM data_user");
$dataUser = mysqli_fetch_assoc($queryUser);
$jumlahUser = $dataUser['total'];

session_start();

// kalo belum login tendang balik
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
  <title>Admin Panel</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="dashboard.css">

    <!-- aos CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- aos JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>
<body data-aos="fade-in">

   <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 p-0">
        <?php include 'sidebar.php'; ?>
      </div>

      <!-- Konten utama -->
      <div class="col-md-9 col-lg-10 p-4">
        <h3 class="mb-4 fw-bold">Selamat Datang, <?php echo htmlspecialchars($namaUser); ?> 👋</h3>

        <!-- Card Menu -->
        <div class="row mb-4">
          <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title">Guru</h5>
                <p class="card-text">Kelola data guru sekolah.</p>
                <a href="dataguru.php" class="btn dynamic-btn btn-sm">Kelola Guru</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title">Siswa</h5>
                <p class="card-text">Kelola data siswa sekolah.</p>
                <a href="datasiswa.php" class="btn dynamic-btn btn-sm">Kelola Siswa</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title">User</h5>
                <p class="card-text">Kelola data user/pengguna.</p>
                <a href="datauser.php" class="btn dynamic-btn btn-sm">Kelola User</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Statistik -->
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card text-white shadow-sm text-center" style="background: #031716">
              <div class="card-body">
                <h6>Jumlah Guru</h6>
                <div class="stat-number fw-bold fs-2" data-target="<?php echo $jumlahGuru; ?>">
                  <?php echo $jumlahGuru; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card text-white shadow-sm text-center" style="background: #274d60">
              <div class="card-body">
                <h6>Jumlah Siswa</h6>
                <div class="stat-number fw-bold fs-2" data-target="<?php echo $jumlahSiswa; ?>">
                  <?php echo $jumlahSiswa; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card text-white shadow-sm text-center" style="background: #6ba3be">
              <div class="card-body">
                <h6>Jumlah User</h6>
                <div class="stat-number fw-bold fs-2" data-target="<?php echo $jumlahUser; ?>">
                  <?php echo $jumlahUser; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div> 
  </div> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
