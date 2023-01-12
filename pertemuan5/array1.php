<?php
##############################
# Pertemuan 5
# Array
################################

// Make Array (CREATE)
$day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];

// Show Array (READ)
// var_dump, print_r
// debugging - untuk developer
var_dump($day);
echo "<br>";
print_r($day);
echo "<br>";

// show 1 element in array
echo $day[2];
echo "<br>";

// Add elment in Array (UPDATE)
echo "Sebelum ditambah <br>";
print_r($day);
echo "<br>";
echo "Sesudah ditambah <br>";
$day[] = "Saturday";
print_r($day);
echo "<br>";

// HAPUS ELEMEN
unset($day[0]);
print_r($day);
?>