<?php

include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM data_guru WHERE id=$id");
}

header("Location: datasiswa.php");
exit;

?>