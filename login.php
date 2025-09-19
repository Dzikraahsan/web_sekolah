<?php
session_start();
include 'config.php'; // koneksi DB lo

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $nama_user = trim($_POST['nama_user']); 
    $email = trim($_POST['email']);
    $passw = trim($_POST['password']);

    if (!empty($email) && !empty($passw)) {
        // cari user berdasarkan email
        $stmt = $conn->prepare("SELECT id, nama_user, email, passw FROM data_user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $dbNamaUser, $dbEmail, $dbPassw);
            $stmt->fetch();

            // verifikasi password
            if (password_verify($passw, $dbPassw)) {
                // simpan session
                $_SESSION['user_id']   = $id;
                $_SESSION['nama_user'] = $dbNamaUser;
                $_SESSION['email']     = $dbEmail;

                // redirect ke dashboard
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "Password salah!";
            }
        } else {
            $error = "Email tidak ditemukan!";
        }
        $stmt->close();
    } else {
        $error = "Email dan password wajib diisi!";
    }
}

// kalau ada error, bisa ditampilkan di form login
if (isset($error)) {
    echo "<script>alert('$error'); window.history.back();</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

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
    <link rel="stylesheet" href="login.css">

<meta name="robots" content="noindex, follow">
</head>
<body data-aos="zoom-in">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <a href="javascript:history.back()" class="btn dynamic-btn">
                    <i class="fa fa-arrow-left"></i>
                </a>
				<div class="login100-pic js-tilt" data-tilt>
					<img style="margin-top: -4rem;" src="https://res.cloudinary.com/da4fjxm1e/image/upload/v1757575171/security_eh3bto.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" style="margin-top: -6rem;">
					<span class="login100-form-title">
						User Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Nama pengguna sudah ada!">
						<input class="input100" type="text" name="nama_user" placeholder="Nama User" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Email / Password?
						</a>
					</div>

					<div class="text-center p-t-136" style="margin-top: -8rem;">
						<a class="txt2" href="register.php">
							Register
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
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
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

    <script>
        AOS.init();
    </script>

</body>
</html>
