<?php
// Pertemuan 2 - Latihan PHP
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka

$nama_saya = "Nina Nadia";
$hobi = "membaca";

//contoh benar
echo "Nama saya adalah " . $nama_saya . " " . "dan hobi saya" . $hobi . "<br>";
echo "Nama saya adalah $nama_saya dan hobi saya $hobi <br>";

//contoh salah penulisan variabel
//echo "Nama saya adalah $Nama_saya";

// Kutip dua ("") itu sedikit lebih powerful than ('') why?
// Dengan menggunakan kutip dua kita bisa menggunakan sebuah konsep yang dinamakan dengan interpolasi
// Interpolasi adalah untuk mengecek apakah didalam kutip dua atau didalam string itu terdapat variabel atau nggak
// nah jika ada maka akan ditampilkan value variabelnya

// Interpolation Example :
echo 'Nama saya adalah $nama_saya';

//Escape Character
$kegiatan = "saya sedang belajar \"PHP\" ";
echo "Ini $kegiatan";

$hari = 'jum\'at';
$Hari = "Jum'at";
echo "Ini hari $hari";
?>