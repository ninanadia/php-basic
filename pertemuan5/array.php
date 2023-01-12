<?php
################################
# Pertemuan 5
# Nama file : Array
#############################

// Make Array (CREATE)
$day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
$month = ["january", "february", "march", "april", "may", "june"];
$arr1 =[101, "Book", 25.000, true];

// Show Array (READ)
// var_dump, print_r
// var_dump => key nya [indeks] dan value [nilai]
var_dump($day);
echo "<br>";
print_r($arr1);
echo "<br>";

// show 1 element in array
echo $day[0];
echo "<br>";

// Add elemen in Array (UPDATE)
echo "Sebelum ditambah <br>";
var_dump($day);
echo "<br>";
echo "Setelah ditambah <br>";
$day[] = "Saturday";
//$day[] = "Sunday";
var_dump($day);

echo "<br>";
// Delete elemen array
unset($day[0]);
var_dump($day);


?>