<?php
// Pertemuan 3 - Latihan PHP
// Operator

// Operator Aritmatika
// +, -, *, /, %

// $a = 10;
// $b = 20;

// $total = $a % $b;
// echo $total;

// Operator Assignment
// $speed = 83; // operasi aritmetika
// $speed *= 10; // operasi penugasan / assignment
// echo $speed;

// Operator Relation
$a = 6;
$b = 2;

// menggunakan operator lebih besar
$c = $a > $b;
echo "$a > $b : $c";
echo "<br>";

// menggunakan operator lebih kecil
$c = $a < $b;
echo "$a < $b : $c";
echo "<br>";

// menggunakan operator relasi sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<br>";

// menggunakan operator relasi tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<br>";

// menggunakan operator lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b : $c";
echo "<br>";

// menggunakan operator lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b : $c";
echo "<br>";

// Operator Logika
// &&, ||, !

$x = 10;
var_dump($x > 20 || $x %2 ==0 );
var_dump($x > 20);
var_dump($x != 20);
var_dump($x >=! 20);







?>