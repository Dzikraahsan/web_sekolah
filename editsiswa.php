<?php
include 'config.php';

if (!isset($_GET['id'])) {
    header("Location: datasiswa.php");
    exit;
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM data_siswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nis    = $_POST['nis'];
    $nama    = $_POST['nama'];
    $umur    = $_POST['umur'];
    $kelas   = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat  = $_POST['alamat'];

    $query = "UPDATE data_siswa 
              SET nis='$nis', nama='$nama', umur='$umur', kelas='$kelas', jurusan='$jurusan', alamat='$alamat' 
              WHERE id=$id";
    mysqli_query($conn, $query);

    header("Location: datasiswa.php");
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
    <link rel="stylesheet" href="editsiswa.css">

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
            <h3 class="fw-bold text-center">Edit Data Siswa</h3>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">NIS</label>
                    <input type="text" name="nis" class="form-control" value="<?= $data['nis'] ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Umur</label>
                    <input type="text" name="umur" class="form-control" value="<?= $data['umur'] ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <select name="kelas" class="form-select" required>
                        <option value="">-- Pilih Kelas --</option>
                        <option value="10" <?= ($data['kelas'] == '10') ? 'selected' : '' ?>>10</option>
                        <option value="11" <?= ($data['kelas'] == '11') ? 'selected' : '' ?>>11</option>
                        <option value="12" <?= ($data['kelas'] == '12') ? 'selected' : '' ?>>12</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <select name="jurusan" class="form-select" required>
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="rpl" <?= ($data['jurusan'] == 'RPL') ? 'selected' : '' ?>>RPL</option>
                        <option value="tkj" <?= ($data['jurusan'] == 'TKJ') ? 'selected' : '' ?>>TKJ</option>
                        <option value="tav" <?= ($data['jurusan'] == 'TAV') ? 'selected' : '' ?>>TAV</option>
                        <option value="atph" <?= ($data['jurusan'] == 'ATPH') ? 'selected' : '' ?>>ATPH</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $data['alamat'] ?>" required>
                </div>
                
                <button type="update" name="update" class="btn dynamic-btn">Update</button>
                <a href="datasiswa.php" class="btn dynamic-btn">Batal</a>
            </form>
        </div>
    </div>

<script>
    AOS.init();
</script>
</body>
</html>