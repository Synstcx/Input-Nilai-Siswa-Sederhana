<?php
require 'koneksi.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $hapus = mysqli_query($conn, "DELETE FROM pelajaran WHERE id = '$id'");

    if ($hapus) {
        header("Location: nilai.php");
        exit;
    } else {
        echo "Gagal menghapus data!";
    }
} else {
    echo "ID tidak ditemukan.";
}
