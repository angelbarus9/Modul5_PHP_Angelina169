<html>
<head>
    <title>Variabel</title>
</head>

<body>
<?php
// PENULISAN ARRAY DAPAT DI BUAT SEPERTI BERIKUT
$nama[] = "Anies";
$nama[] = "Prabowo";
$nama[] = "Ganjar";

echo $nama[1] . $nama[2] . $nama[0];
echo "<br>";

// nomor 5
//menghitung jumlah elemen array 
$jum_array = count($nama); 
echo "jumlah elemen array = ". $jum_array;
// 
?>
</body>
</html>
