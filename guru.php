<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $bi = $_POST['bi'];
    $mtk = $_POST['mtk'];
    $bing = $_POST['bing'];
    $pweb = $_POST['pweb'];
    $olahraga = $_POST['olahraga'];

    $sql = "INSERT INTO pelajaran (nama, bi, mtk, bing, pweb, olahraga)
            VALUES ('$nama', '$bi', '$mtk', '$bing', '$pweb', '$olahraga')";
    $insert = mysqli_query($conn, $sql);

    if ($insert) {
        echo "Data nilai untuk <strong>$nama</strong> berhasil disimpan. <a href='nilai.php?nama=" . urlencode($nama) . "'>Lihat nilai</a>";
    } else {
        echo "Gagal menyimpan nilai.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: left;
        }

        label {
            font-weight: 600;
            display: block;
            margin-top: 15px;
            color: #444;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            border: none;
            color: #fff;
            font-weight: bold;
            font-size: 15px;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 20px;
            transition: background 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        hr {
            margin-top: 30px;
            margin-bottom: 30px;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .link-button {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            color: white;
            transition: background 0.3s;
            display: inline-block;
            text-align: center;
        }

        .btn.green {
            background-color: #28a745;
        }

        .btn.green:hover {
            background-color: #218838;
        }

        .btn.blue {
            background-color: #007BFF;
        }

        .btn.blue:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Form Input Nilai Siswa</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Bahasa Indonesia:</label>
        <input type="number" name="bi" required>

        <label>Matematika:</label>
        <input type="number" name="mtk" required>

        <label>Bahasa Inggris:</label>
        <input type="number" name="bing" required>

        <label>Pemrograman Web:</label>
        <input type="number" name="pweb" required>

        <label>Olahraga:</label>
        <input type="number" name="olahraga" required>

        <button type="submit" name="submit">Simpan Nilai</button>
    </form>

    <hr>

    <div class="link-button">
        <a href="jadwal.php" class="btn green">Lihat Jadwal</a>
        <a href="index.php" class="btn blue">Logout</a>
    </div>
</body>
</html>
