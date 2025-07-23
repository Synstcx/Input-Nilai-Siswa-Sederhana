<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "sekolah";

$conn = new mysqli($host,$user,$pass,$db);
if ($conn) {
  echo "<script>alert('Koneksi ke database berhasil!');</script>";
} else {
  echo "KONEKSI DATABASE GAGAL, CEK LAGI";
}

?>