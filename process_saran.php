<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $nama = $_POST['nama'] ?? '';
    $email = $_POST['email'] ?? '';
    $pesan = $_POST['pesan'] ?? '';
    $stmt = $conn->prepare("INSERT INTO saran (nama, email, pesan) VALUES (?,?,?)");
    $stmt->bind_param('sss', $nama, $email, $pesan);
    if($stmt->execute()) {
        header("Location: kontak.php?s=ok");
        exit;
    } else {
        echo "Gagal Menyimpan Saran: " . $conn->error;
    } 
    }else {
        header("Location: kontak.php");
    }
?>