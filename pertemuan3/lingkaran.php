<?php
   
    echo "=== Program Menghitung Luas Lingkaran Dengan PHP ===\n\n";
    echo "Masukkan jari-jari lingkaran : ";
    $jari = fgets(STDIN);        // variable jari berisi nilai jari-jari
    $luas = 3.14 * $jari * $jari; //variable rumus perhitungan
   
    echo "Hasilnya adalah : ".$luas;  //hasil perhitungan  
   
?>