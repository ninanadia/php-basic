<?php
####################
# Pertemuan 6
# Variabel Scope
########################

// Variabel Scope/Lingkup Variabel
// Variabel lokal
$x = 10;

// // VARIABEL lokal didalam fungsi
// function tampilX(){
    $x;
    //$x = 20;
    echo $x;
// }

tampilX();

var_dump($_SERVER);