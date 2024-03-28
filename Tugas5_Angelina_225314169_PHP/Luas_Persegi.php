<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas Persegi Panjang</title>
    <link rel="stylesheet" type="text/css" href="style_luas.css">
</head>
<body>
    <h2>Kalkulator Luas Persegi Panjang</h2>
    <form method="post">
        <label for="panjang">Panjang:</label><br>
        <input type="text" id="panjang" name="panjang"><br><br>
        <label for="lebar">Lebar:</label><br>
        <input type="text" id="lebar" name="lebar"><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    // Fungsi untuk menghitung luas persegi panjang
    function hitungLuasPersegiPanjang($panjang, $lebar) {
        $luas = $panjang * $lebar;
        return $luas;
    }

    // Cek apakah tombol Hitung ditekan dan proses form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai panjang dan lebar dari form
        $panjang = $_POST['panjang'] ?? '';
        $lebar = $_POST['lebar'] ?? '';

        // Validasi input (tidak boleh kosong dan harus angka)
        if (empty($panjang) || empty($lebar) || !is_numeric($panjang) || !is_numeric($lebar)) {
            echo "<div class='result'> Nilai panjang dan lebar tidak valid. Masukkan kembali nilai yang valid </div>";
        } else {
            // Hitung luas persegi panjang menggunakan fungsi yang telah dibuat
            $luas = hitungLuasPersegiPanjang($panjang, $lebar);
            echo "<div class='result'>Luas persegi panjang dengan: <br> Panjang :  $panjang  <br>Lebar : $lebar  <br>Maka Luas: $luas</div>";
        }
    }
    ?>
</body>
</html>


