<?php
// Make Array (CREATE)
$day = ["Monday", "Tuesday", "Wednesday", "Thursday"];

// show array (READ)
// var_dump, print_r
var_dump($day);
echo "<br>";
print_r($day);
echo "<br>";

// show 1 element in array
// echo $day[2];

// add elemen in to array (UPDATE)
echo "Sebelum ditambah <br>";
var_dump($day);

echo "<br>";

echo "Setelah ditambah <br>";
$day[] = "Friday";
var_dump($day);

echo "<br>";


// delete elemen array
unset($day[0]);
var_dump($day);
?>