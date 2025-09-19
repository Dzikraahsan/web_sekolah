<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
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
    <link rel="stylesheet" href="datasiswa.css">

</head>
<body data-aos="fade-in">

    <div class="d-flex">

    <?php include 'sidebar.php'; ?>

        <div class="flex-grow-1 p-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-2">
                <h2 class="fw-bold">Data Siswa</h2>
                <a href="tambahguru.php" class="btn btn-outline-primary">Tambah Siswa</a>
            </div>
            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                <table class="table table-custom table-striped table-bordered">
                    <thead class="table">
                    <tr>
                        <th>ID</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM data_siswa");
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nis']}</td>
                                <td>{$row['nama']}</td>
                                <td>{$row['umur']}</td>
                                <td>{$row['kelas']}</td>
                                <td>{$row['jurusan']}</td>
                                <td>{$row['alamat']}</td>
                                <td>
                                    <div class='d-flex gap-1'>
                                        <a href='editsiswa.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                        <a href='hapussiswa.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin mau hapus?\")'>Hapus</a>
                                    </div>
                                </td>
                            </tr>";
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr></tr>
                    </tfoot>
                </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        AOS.init();

        const html = document.documentElement;

        // Ambil theme dari localStorage
        const savedTheme = localStorage.getItem('theme') || 'light';
        
    </script>
</body>
</html>
