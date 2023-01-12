<?php
echo "---------Menghitung Luas Lingkaran-----------\n\n";

echo "Masukkan jari-jari :";
$jari = fgets(STDIN);
$luas = 3.14 * $jari * $jari ;

echo "Luas Lingkaran adalah :" . $luas;

?>