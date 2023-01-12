<?php
// Pertemuan 2 - Latihan PHP
// Operator

// Operator aritmatika
// +, - , *, /, %
// $a = 10;
// $b = 20;

// $total = $a / $b;
// echo $total;

// Penggabung string / concatenation/ concat
// .
// $nama_depan = "Nina";
// $nama_belakang = "Nadia";
// echo $nama_depan . $nama_belakang;

// Operator Assignment
// $speed = 83;
// // ini opertor aritmatika
// $speed = $speed + 10;
// // operator assignment
// $speed += 10;
// echo $speed;


// Operator relation
$a = 10;
$b = 20;

// menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";

// Operator LOGIKA
// &&. ||, !
// Usually using untuk pengkondisian

//untuk logika && dua kondisi harus bernilai true
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x <! 20)
// dia akan cek apakah 10 lebih kecil dari 20 maka nilainya true dan apakah nilai 10 habis dibagi 2 jawabannya true
// true && true = true , true && false = false, false && false = false
// OR
// true || true = true, true || false = true, false || false = false



?>