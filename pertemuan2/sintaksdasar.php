<?php
// Pertemuan 2 - Latihan PHP
// Sintaks PHP

// Standar Output
// echo, print
// print_r -> khusus digunakan untuk mencetak isi array atau string
// var_dump -> digunakan umtuk melihat isi variabel
// Biasanya kita menggunakan print_r dan var_dump ini hanya untuk debugging atau proses untuk melihat error di program kita
// bukan digunakan pada pemrograman web kalian

//echo
echo "Nina Nadia<br>";
echo "Ini ", " teks ", "yang ", "dibuat ", "terpisah. <br>";
echo "Ini " . " teks " . "yang " . "dibuat ". "terpisah. <br>";

/* Perbedaan print dan echo
- Fungsi print() akan selalu mengembalikan nilai 1 saat dieksekusi, 
sedangkan echo() tidak mengembalikan apa-apa.
- Fungsi print() hanya boleh diberikan satu parameter saja, 
sedangkan echo() boleh lebih dari satu
*/

//print
print "Nina Nadia<br>";
// print "Nina" , "Nadia"; -> ini error

// print_r
$nama_siswa = array ("Amel", "Beby", "Asiah", "Firasya");
echo "<pre>"; print_r($nama_siswa); echo "</pre>";

// var_dump
var_dump("Nina Nadia");


// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP -> tapi ini tidak direkomendasikan
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <!-- 1. PHP didalam HTML -->
    <!-- <h1>Halo, Welcome Nina</h1> -->
    <h1>Halo, Welcome <?php echo "Nina"; ?></h1>
    <p><?php echo "Ini adalah Paragraf"; ?></p>

    <!-- 2. Tag HTML didalam PHP -->
    <?php
    echo "<h1>Welcome Nina Nadia</h1>";
    ?>
</body>
</html>