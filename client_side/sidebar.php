<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Sidebar</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="sidebar.css">

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

    <!-- Dashboard -->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark"
          style="width: 200px; height: 150vh;">

            <span class="text-center fs-5 ms-4 fw-bold text-white">
                User Side
                <a href="../admin/dashboard.php" class="text-decoration-none text-white"
                    style="opacity: 0%;">
                    <i class="fa-solid fa-user ms-1"></i>
                </a>
            </span>

            <hr>

            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">📊 Dashboard</a>
                </li>
                <li>
                    <a href="guru.php" class="nav-link text-white">👨‍🏫 Guru</a>
                </li>
                <li>
                    <a href="siswa.php" class="nav-link text-white">🎓 Siswa</a>
                </li>
                <a href="../beranda.php" class="btn dynamic-btn2 mt-3">Kembali</a>
            </ul>
        </div>

</body>
</html>