<?php include 'config.php';
?>

<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="siswa.css">

</head>
<body data-aos="fade-in">

<!-- Content -->
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>

        <div class="flex-grow-1 p-4">
            <div class="container-fluid">

            <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap">
                <h2 class="fw-bold mb-2 mb-md-0">Data Siswa</h2>

                <div class="input-group mx-md-4 my-2 my-md-0 justify-content-center" style="max-width: 400px;">
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari nama siswa...">
                    <button class="btn dynamic-btn" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <!-- Tabel data -->
            <div class="table-responsive mt-4" style="max-height: 465px; overflow-y: auto;">
                <table class="table table-custom table-striped table-bordered">
                    <thead class="table">
                    <tr class="text-center">
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Kelas</th>
                    </tr>
                    </thead>
                        <tbody>
                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM data_siswa");
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $kelas_full = $row['kelas'] . " " . $row['jurusan'] . " " . $row['subkelas'];

                                    echo "<tr>
                                            <td>{$row['nis']}</td>
                                            <td>{$row['nama']}</td>
                                            <td>{$row['umur']}</td>
                                            <td>{$kelas_full}</td>
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

    // initial aos
    AOS.init({
        offset: 50,
        duration: 600,
        easing: 'ease-in-out',
        once: true
    });

    const html = document.documentElement;

    // Ambil theme dari localStorage
    const savedTheme = localStorage.getItem('theme') || 'light';

    // fungsi search box
    document.getElementById('searchInput').addEventListener('keyup', function() {
        const input = this.value.toLowerCase();
        const rows = document.querySelectorAll('table tbody tr');

        rows.forEach(row => {
            const nis = row.cells[0].textContent.toLowerCase();
            const nama = row.cells[1].textContent.toLowerCase();
            const umur = row.cells[2].textContent.toLowerCase();

            if (nis.includes(input) || nama.includes(input) || umur.includes(input)) {
            row.style.display = '';
            } else {

            row.style.display = 'none';
            }
        });
    });

</script>

</body>
</html>
