<?php
require 'koneksi.php';

$nama = '';
$data = null;

if (isset($_POST['cari'])) {
    $nama = $_POST['nama'];
    $query = mysqli_query($conn, "SELECT * FROM pelajaran WHERE nama = '$nama' LIMIT 1");
    $data = mysqli_fetch_assoc($query);
}

$siswaList = mysqli_query($conn, "SELECT DISTINCT nama FROM pelajaran ORDER BY nama ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Siswa & Nilai</title>
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
            margin-bottom: 30px;
        }

        .form-container {
            background: #fff;
            padding: 25px 35px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 300px;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
            font-size: 15px;
            color: #444;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
            width: 250px;
        }

        button[type="submit"] {
            padding: 10px 18px;
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 90%;
            max-width: 700px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        p {
            margin-top: 20px;
        }

        .btn-back {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 25px;
            background-color: #28a745;
            color: white;
            font-weight: bold;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s;
        }

        .btn-back:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <h2>Cek Data Siswa & Nilai</h2>

    <div class="form-container">
        <form method="POST">
            <label>Masukkan Nama Siswa:</label>
            <input type="text" name="nama" value="<?= htmlspecialchars($nama) ?>" required>
            <button type="submit" name="cari">Lihat Data</button>
        </form>
    </div>

    <?php if ($data): ?>
        <h3>Halo, <?= htmlspecialchars($data['nama']) ?>! Nilaimu di bawah</h3>
        <table>
            <tr>
                <th>Bahasa Indonesia</th>
                <th>Matematika</th>
                <th>Bahasa Inggris</th>
                <th>Pemrograman Web</th>
                <th>Olahraga</th>
            </tr>
            <tr>
                <td><?= $data['bi'] ?></td>
                <td><?= $data['mtk'] ?></td>
                <td><?= $data['bing'] ?></td>
                <td><?= $data['pweb'] ?></td>
                <td><?= $data['olahraga'] ?></td>
            </tr>
        </table>
    <?php elseif ($nama): ?>
        <p style="color:red;">Data untuk <strong><?= htmlspecialchars($nama) ?></strong> tidak ditemukan.</p>
    <?php endif; ?>
    
    <hr><hr><hr><br>

    <h3>Data Siswa yang Sudah Terdaftar</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($siswaList)) {
            echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama']}</td>
            </tr>";
            $no++;
        }
        ?>
    </table>

    <a href="index.php" class="btn-back">Kembali</a>

</body>
</html>
