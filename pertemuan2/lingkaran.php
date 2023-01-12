<?php
   
    echo "\t=== Program Menghitung Luas Lingkaran Dengan PHP ===\n\n";
    echo "Masukkan jari-jari lingkaran : ";
    $jari = trim(fgets(STDIN));        // variable jari berisi nilai jari-jari
    $luas = 3.14 * $jari * $jari; //variable rumus perhitungan
   
    echo "\tHasilnya adalah : ".$luas;  //hasil perhitungan  
   
?>