<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM data_user WHERE id=$id");
}

header("Location: datauser.php");
exit;
?>