<?php
require 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM pelajaran");

$nama_siswa = isset($_GET['nama']) ? $_GET['nama'] : null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Nilai Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        table {
            width: 95%;
            max-width: 1000px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 16px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn-hapus {
            background-color: #dc3545;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn-hapus:hover {
            background-color: #c82333;
        }

        .action-buttons {
            margin-top: 30px;
            display: flex;
            gap: 20px;
        }

        .action-buttons a {
            text-decoration: none;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 6px;
            color: white;
            transition: background 0.3s;
        }

        .action-buttons .back {
            background-color: #28a745;
        }

        .action-buttons .back:hover {
            background-color: #218838;
        }

        .action-buttons .logout {
            background-color: #ff9800;
        }

        .action-buttons .logout:hover {
            background-color: #e68900;
        }

        button a {
            color: white;
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

    <h2>Data Nilai Siswa</h2>

    <?php if ($nama_siswa): ?>
        <p>Halo, <strong><?= htmlspecialchars($nama_siswa) ?></strong>! Berikut nilai kamu:</p>
    <?php endif; ?>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Bahasa Indonesia</th>
            <th>Matematika</th>
            <th>Bahasa Inggris</th>
            <th>Pemrograman Web</th>
            <th>Olahraga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama']}</td>
                <td>{$row['bi']}</td>
                <td>{$row['mtk']}</td>
                <td>{$row['bing']}</td>
                <td>{$row['pweb']}</td>
                <td>{$row['olahraga']}</td>
                <td>
                    <form action='hapus.php' method='POST' onsubmit=\"return confirm('Yakin ingin menghapus data ini?');\">
                        <input type='hidden' name='id' value='{$row['id']}'>
                        <button class='btn-hapus' type='submit'>Hapus</button>
                    </form>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>

    <div class="action-buttons">
        <a href="guru.php" class="back">Kembali</a>
        <a href="index.php" class="logout">Logout</a>
    </div>

</body>
</html>
