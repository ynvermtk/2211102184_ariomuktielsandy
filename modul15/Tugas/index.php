<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Cek Umur</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Cek Status Umur</h1>
        <form action="" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" required>

            <button type="submit">Cek</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']);
            $umur = (int) $_POST['umur'];

            echo "<div class='result'>";
            echo "<p>Halo, <strong>$nama</strong>!</p>";
            if ($umur >= 18) {
                echo "<p>Status: <span class='dewasa'>Dewasa</span></p>";
            } else {
                echo "<p>Status: <span class='belum-dewasa'>Belum Dewasa</span></p>";
            }
            echo "</div>";
        }
        ?>
    </div>

</body>

</html>