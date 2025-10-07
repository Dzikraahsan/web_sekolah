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
    $nis        = $_POST['nis'];
    $nama       = $_POST['nama'];
    $umur       = $_POST['umur'];
    $kelas      = $_POST['kelas'];
    $jurusan    = $_POST['jurusan'];
    $subkelas   = $_POST['subkelas'];

    $query = "UPDATE data_siswa
              SET nis='$nis', nama='$nama', umur='$umur', kelas='$kelas', jurusan='$jurusan', subkelas='$subkelas'
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

    <!-- Title -->
    <title>Data Siswa</title>

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
    <link rel="stylesheet" href="editsiswa.css">

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body class="bg-light" data-aos="fade-in">

<!-- Content -->
    <div class="d-flex">

        <div class="col-md-3 col-lg-2 p-0">
            <?php include 'sidebar.php'; ?>
        </div>

        <div class="container p-5 rounded mb-5 mt-4" style="width: 75%; height: max-content; margin: 0 auto; display: block;">
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
                        <div class="row g-2">
                            <div class="col-md-4">

                            <select name="kelas" class="form-select" required>
                                <option value="">-- Kelas --</option>
                                <option value="10" <?= ($data['kelas']=="10"?"selected":"") ?>>10</option>
                                <option value="11" <?= ($data['kelas']=="11"?"selected":"") ?>>11</option>
                                <option value="12" <?= ($data['kelas']=="12"?"selected":"") ?>>12</option>
                            </select>
                            </div>

                            <div class="col-md-4">
                            <select name="jurusan" class="form-select" required>
                                <option value="">-- Jurusan --</option>
                                <option value="RPL" <?= ($data['jurusan']=="RPL"?"selected":"") ?>>RPL</option>
                                <option value="TKJ" <?= ($data['jurusan']=="TKJ"?"selected":"") ?>>TKJ</option>
                                <option value="TAV" <?= ($data['jurusan']=="TAV"?"selected":"") ?>>TAV</option>
                                <option value="ATPH" <?= ($data['jurusan']=="ATPH"?"selected":"") ?>>ATPH</option>
                            </select>
                            </div>

                            <div class="col-md-4">
                            <select name="subkelas" class="form-select" required>
                                <option value="">-- Subkelas --</option>
                                <option value="1" <?= ($data['subkelas']=="1"?"selected":"") ?>>1</option>
                                <option value="2" <?= ($data['subkelas']=="2"?"selected":"") ?>>2</option>
                                <option value="3" <?= ($data['subkelas']=="3"?"selected":"") ?>>3</option>
                                <option value="4" <?= ($data['subkelas']=="4"?"selected":"") ?>>4</option>
                            </select>

                        </div>
                    </div>
                </div>

                <button type="update" name="update" class="btn dynamic-btn">Update</button>
                <a href="datasiswa.php" class="btn dynamic-btn">Batal</a>

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
    
</script>
</body>
</html>