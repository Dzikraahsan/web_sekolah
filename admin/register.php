<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $nama_user = trim($_POST['nama_user']);
    $email     = trim($_POST['email']);
    $passw     = trim($_POST['passw']);

    if (!empty($nama_user) && !empty($email) && !empty($passw)) {
        $hashedPassw = password_hash($passw, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO data_user (nama_user, email, passw) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama_user, $email, $hashedPassw);

        if ($stmt->execute()) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('Email sudah terdaftar!'); window.history.back();</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Nama, email, dan password wajib diisi!'); window.history.back();</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Halaman Registrasi</title>

     <!-- ikon -->
    <link rel="shortcut icon" href="https://smkn1maja.sch.id/src\logo\logo-smk.png" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="login-util.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <!-- aos CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- aos JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Style css -->
    <link rel="stylesheet" href="register.css">

<!--  -->
<meta name="robots" content="noindex, follow">

</head>
<body data-aos="zoom-in">

    <!-- Form Registrasi -->
	<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <a href="javascript:history.back()" class="btn dynamic-btn">
                    <i class="fa fa-arrow-left"></i>
                </a>

                <!-- Form Register -->
                <form class="login100-form validate-form" method="POST" action="register.php" style="margin-top: -6.5rem;">
                    <span class="login100-form-title">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Nama pengguna sudah ada!">
						<input class="input100" type="text" name="nama_user" placeholder="Nama User" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                   <div class="wrap-input100 validate-input" data-validate="Password is required">
						<input id="password-field" class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<span class="toggle-password" onclick="togglePassword()">
							<i class="fa fa-eye" id="toggleIcon"></i>
						</span>
					</div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="register">
                            Register
                        </button>
                    </div>
                </form>

                     <div class="login100-pic js-tilt" data-tilt style="flex: 1; text-align: center;">
                        <img style="max-width: 90%; height: auto; margin-top: -9rem; margin-left: 8rem;" src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757575171/security_eh3bto.png" alt="IMG">
                    </div>

            </div>
        </div>
    </div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script>

    // initial aos
    AOS.init({
        offset: 50,
        duration: 600,
        easing: 'ease-in-out',
        once: true
    });

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');

    // toggle password
	function togglePassword() {
		const passwordField = document.getElementById("password-field");
		const toggleIcon = document.getElementById("toggleIcon");

		if (passwordField.type === "password") {
			passwordField.type = "text";
			toggleIcon.classList.remove("fa-eye");
			toggleIcon.classList.add("fa-eye-slash");
		} else {
			passwordField.type = "password";
			toggleIcon.classList.remove("fa-eye-slash");
			toggleIcon.classList.add("fa-eye");
		}
	}

</script>

<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
