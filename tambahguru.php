<?php
include 'config.php';

if (isset($_POST['simpan'])) {
    $nik             = $_POST['nik'];
    $nama            = $_POST['nama'];
    $jenis_kelamin   = $_POST['jenis_kelamin'];
    $alamat          = $_POST['alamat'];
    $jabatan         = $_POST['jabatan'];
    $statuss         = $_POST['statuss'];

    $query = "INSERT INTO data_guru (nik, nama, jenis_kelamin, alamat, jabatan, statuss) 
              VALUES ('$nik', '$nama', '$jenis_kelamin', '$alamat', '$jabatan', '$statuss')";
    mysqli_query($conn, $query);

    header("Location: dataguru.php");
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
    <link rel="stylesheet" href="tambahguru.css">
    

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body class="bg-light" data-aos="fade-in">

    <div class="d-flex">

        <div class="col-md-3 col-lg-2 p-0">
            <?php include 'sidebar.php'; ?>
        </div>

        <div class="container border border-1 p-5 rounded mb-5 mt-4" style="width: 75%; height: max-content; margin: 0 auto; display: block;">
            <h4 class="fw-bold text-center mb-5">Tambah Data Guru</h4>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">NIK</label>
                    <input type="text" name="nik" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status Guru</label>
                    <select name="statuss" class="form-select" required>
                        <option value="">-- Pilih Status --</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>
                
                <button type="submit" name="simpan" class="btn dynamic-btn">Simpan</button>
                <a href="dataguru.php" class="btn dynamic-btn">Kembali</a>
            </form>
        </div>
    </div>

<script>
    AOS.init();
</script>
</body>
</html>