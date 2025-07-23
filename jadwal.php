<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9fafb;
    margin: 40px 20px;
}

h1 {
    color: #333;
    margin-bottom: 30px;
}

table {
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
    width: 80%;
    max-width: 700px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
}

th, td {
    padding: 15px 20px;
    text-align: center;
    border: 1px solid #ddd;
    font-weight: 600;
    color: #555;
}

th {
    background-color: #007BFF;
    color: white;
}

td {
    font-weight: normal;
    color: #333;
}

tbody tr:hover {
    background-color: #f1f7ff;
    transition: background-color 0.3s;
}

/* Tombol Kembali */
a.btn {
    display: inline-block;
    padding: 12px 28px;
    margin-top: 30px;
    background-color: #007BFF;
    color: white;
    font-weight: bold;
    border-radius: 6px;
    text-decoration: none;
    transition: background-color 0.3s;
}

a.btn:hover {
    background-color: #0056b3;
}

    </style>

</head>
<body>
    
    <h1>Jadwal Pelajaran</h1>

        <table border="1">
            <thead>
                <tr>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>B.Indonesia</td>
                    <td>MTK</td>
                    <td>B.Inggris</td>
                    <td>PWEB</td>
                    <td>Olahraga</td>
                </tr>
            </tbody>
        </table><br><br><hr><br><br><br><br>

        <a href="guru.php" class="btn">Kembali</a>


</body>
</html>