<?php

if($_SERVER['REQUEST_METHOD']==='POST') {
    $password = $_POST['password'];
    if(!empty($password)) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        echo "<p><b>Password: </b> " . htmlspecialchars($password) . "</p>";
        echo "<p><b>Hash: </b> " . $hash . "</p>";
        echo "<p>Gunakan hash ini untuk menginput ke kolom <code>Password</code> pada tabel <code>User<code/> </p>";
    } else {
        echo "<p style='color: red;'>Password Tidak Boleh Kosong.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Password hash</title>

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
    <link rel="stylesheet" href="genpass.css">

     <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body>
    <h2>Generate Password Hash</h2>
        <form method="POST">
            <label>Masukkan Password: </label><br>
            <input type="text" name="password" required>
            <button type="submit">Generate</button>
        </form>
</body>
</html>