<?php
######################
# Pertemuan 6
# LATIHAN 1
#####################

// Variable Sope/ lingkup variabel
// Variabel lokal untuk file latihan1.php
$x = 10;
// nah disini kita bikin sebuah variabel yang mana hanya dapat digunakan
/// untuk file ini saja



function tampilX(){
    //$x = 20;
    global $x;
    echo $x;
    // variabel lokal untuk function tampilX()
    // lingkup variabel x didalam function itu berbeda dengan yang ada diatas
    // variabel didalam function hanya berlaku untuk function itu aja
}

tampilX();
echo "<br>";
echo $x;

?>