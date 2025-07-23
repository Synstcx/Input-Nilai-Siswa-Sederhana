<!DOCTYPE html>
<html>
<head>
    <title>Login Role Sederhana</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <form method="POST" action="">
            <div class="tabel">
                <label>Pilih Role:</label><br>
                <select name="role" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select><br><br>

                <button type="submit" name="login">Login</button>
            </div>
        </form>

        <?php
        if (isset($_POST['login'])) {
            $role = $_POST['role'];

            if ($role == "guru") {
                header("Location: guru.php");
                exit;
            } elseif ($role == "siswa") {
                header("Location: siswa.php");
                exit;
            } else {
                echo "<p style='color:red;'>Silakan pilih role terlebih dahulu!</p>";
            }
        }
        ?>
    </div>
</body>
</html>
