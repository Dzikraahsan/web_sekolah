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
                    Admin Panel
                    <a href="../client_side/index.php" class="text-decoration-none text-white"
                        style="opacity: 0%;">
                        <i class="fa-solid fa-user ms-1"></i>
                    </a>
                </span>
            <hr>

            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link text-white">📊 Dashboard</a>
                </li>
                <li>
                    <a href="dataguru.php" class="nav-link text-white">👨‍🏫 Data Guru</a>
                </li>
                <li>
                    <a href="datasiswa.php" class="nav-link text-white">🎓 Data Siswa</a>
                </li>
                <li>
                    <a href="datauser.php" class="nav-link text-white">👤 Data User</a>
                </li>
                <li>
                    <a href="logout.php" class="nav-link text-white">🚪 Logout</a>
                </li>
                <a href="../beranda.php" class="btn dynamic-btn2 mt-3">Kembali</a>
            </ul>
        </div>

</body>
</html>