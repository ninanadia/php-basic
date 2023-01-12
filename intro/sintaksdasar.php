<?php
// Pertemuan 2 - Latihan PHP
// Sintaks PHP

// Standar Output
// echo, print 
// print_r
// var_dump

//echo
//concat
// echo "Nina Nadia <br>";
// echo 10;
// echo"<br>";
// echo "Nina ", "Nadia", " Syafiti<br>";
// echo "Ini" . "teks" . "yang" . "dibuat" . "terpisah <br>";

//print
//print "Nina Nadia";


// print_r
// $nama_siswa = array("Amel", "Asiah" , "Beby", "Firasya");
// print_r($nama_siswa);

//var_dump
//var_dump("Nina Nadia");


// Penulisan Sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP
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
<!-- PHP didalam HTML -->
    <h1>Halo, Welcome <?php echo "Nina"; ?> </h1>
    <p><?php echo "Ini adalah paragraf";?></p>

    <!-- 2. tag HTML didalam PHP -->
    <?php 
    echo "<h1>Welcome Nina Nadia</h1>";
    ?>
</body>
</html>