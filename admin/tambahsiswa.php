<?php

include 'config.php';

if (isset($_POST['simpan'])) {
    $nis        = $_POST['nis'];
    $nama       = $_POST['nama'];
    $umur       = $_POST['umur'];
    $kelas      = $_POST['kelas'];
    $jurusan    = $_POST['jurusan'];
    $subkelas   = $_POST['subkelas'];

    $query = "INSERT INTO data_siswa (nis, nama, umur, kelas, jurusan, subkelas)
              VALUES ('$nis', '$nama', '$umur', '$kelas', '$jurusan', '$subkelas')";
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
    <link rel="stylesheet" href="tambahsiswa.css">

     <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body class="bg-light" data-aos="fade-in">

    <!-- Form Tambah Siswa -->
        <div class="d-flex">

            <div class="col-md-3 col-lg-2 p-0">
                <?php include 'sidebar.php'; ?>
            </div>

            <div class="container p-5 rounded mb-5 mt-4" style="width: 75%; height: max-content; margin: 0 auto; display: block;">
                <h4 class="fw-bold text-center mb-5">Tambah Data Siswa</h4>
                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label">NIS</label>
                        <input type="text" name="nis" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Umur</label>
                        <input type="number" name="umur" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <div class="row g-2">

                            <!-- Pilih Kelas -->
                            <div class="col-md-4">
                                <select name="kelas" class="form-select" required>
                                    <option value="">-- kelas --</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>

                            <!-- Pilih Jurusan -->
                            <div class="col-md-4">
                                <select name="jurusan" class="form-select" required>
                                    <option value="">-- Jurusan --</option>
                                    <option value="RPL">RPL</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="TAV">TAV</option>
                                    <option value="ATPH">ATPH</option>
                                </select>
                            </div>

                            <!-- Pilih Subkelas -->
                            <div class="col-md-4">
                                <select name="subkelas" class="form-select" required>
                                    <option value="">-- Subkelas --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <button type="submit" name="simpan" class="btn dynamic-btn">Simpan</button>
                    <a href="datasiswa.php" class="btn dynamic-btn">Kembali</a>

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