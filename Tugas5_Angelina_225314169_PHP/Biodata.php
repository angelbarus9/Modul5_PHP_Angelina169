<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
    <link rel="stylesheet" type="text/css" href="style_bio.css">
</head>
<body>
    <form method="post">
            <h2>Form Biodata</h2>

        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Simpan">
    </form>

    <?php
    // Cek apakah form telah disubmit
    if (isset($_POST['submit'])) {
        // Ambil nilai dari form
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];

        // Tampilkan informasi biodata dalam tabel
        echo "<div class='info'>";
        echo "<h3>Informasi Biodata</h3>";
        echo "<table>";
        echo "<tr><td>Nama</td><td>:</td><td>$nama</td></tr>";
        echo "<tr><td>NIM</td><td>:</td><td>$nim</td></tr>";
        echo "<tr><td>Alamat</td><td>:</td><td>$alamat</td></tr>";
        echo "<tr><td>Pekerjaan</td><td>:</td><td>$pekerjaan</td></tr>";
        echo "</table>";
        echo "</div>";
    }
    ?>
</body>
</html>


