<?php
echo "Hello, PHP!<br>"; // <br> harus berada dalam tanda kutip

$nama = "Ario Mukti Elsandy";
$umur = 21;
echo "Halo, nama saya $nama dan saya berumur $umur tahun.<br>";

$a = 10;
$b = 5;
echo $a + $b; // Penjumlahan echo $a - $b; 
echo "<br>";
echo $a * $b; // Perkalian echo $a / $b; 
echo "<br>";
echo $a - $b; // Pengurangan echo $a * $b;
echo "<br>";
echo $a % $b; // Pembagian echo $a % $b;
echo "<br>"; // Modulus 

$nilai = 80;
if ($nilai >= 75) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}

$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo " Hari ini Senin <br>";
        break;
    case "Selasa":
        echo " Hari ini Selasa <br>";
        break;
    default:
        echo " Hari tidak diketahui <br>";
}

for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-$i <br>";
}

$x = 1;
while ($x <= 5) {
    echo "Angka $x <br>";
    $x++;
}

$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) {
    echo "Buah: $b <br>";
}

$hewan = ["Kucing", "Anjing", "Burung"];
echo $hewan[0]; // Output: Kucing
