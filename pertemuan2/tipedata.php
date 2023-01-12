<?php
// Pertemuan 2 - Latihan PHP
// Data Type

// Tipe Data Int, float, string
$var1 = 5;
$var2 = 7.5;
$var3 = "We learn PHP";

var_dump($var1);

// Tipe data Boolean
$benar=true;
if ($benar){
    echo "anda benar";
}

// $benar=false;
// if ($benar){
//     echo "anda benar";
// }


// Tipe data Array
// $siswa1 = "Zaskia";
// $siswa2 = "Ghadiza";
// $siswa3 = "Fildza";
// $siswa4 = "Beby";
// $siswa5 = "Dila";

// echo "$siswa5";

// This can you use if your data sedikit, but jika data mu ratusan bahkan ratusan ribu apakah kamu mau membuat semuanya ?
// Didalam array itu ada yang namanya index/urutan didalam array dimulai dari 0
$siswa=array("Zaskia", "Ghadiza", "Fildza", "Beby", "Dila");
echo "$siswa[1]";
echo "<br>";
//short sintax using PHP 5.4 Keatas
$siswa=["Zaskia", "Ghadiza", "Fildza", "Beby", "Dila"];
echo "$siswa[4]";

$siswa2 = [
    "Zaskia",
    "Ghadiza",
    "Fildza"
];
echo var_dump($siswa2);

//Tipe data khusus
$f = NULL;
?>