<?php
####################################################
# Pertemuan : 4
# Nama File : operator_increment.php
###################################################

#Pre-increment
/*
Notes : 
jadi sebelum $a dicetak, sebelumnya telah 
memiliki nilai 1
karena i bernilai 1, maka 1 + i = 2, 
nah nilai $a sudah jadi 2 sebelum dicetak
*/
echo "<h3>Preincrement</h3>";
//
$i = 1;
$a = $i;
$a = ++$i; // i = 1 + i; a = i -> 1+ 1 = 2
echo "a = " . $a . "<br>";
echo "i = " . $i;


/*
Notes : 
jadi $a dicetak terlebih dahulu karena i sudah ada nilai 1,
karena i bernilai 1, nilai $a menjadi 1 ketika dicetak pada proses output pertama
ketika dipanggil variabel $i nah baru proses i + 1 = 2 dijalankan, karena nilai i pertama
suda dicetak
*/
echo "<br>";
#Post-increment
echo "<h3>Postincrement</h3>";
$a = 0;
$i = 1;
$a = $i++; // a = i; i = i + 1;
echo "a = " . $a . "<br>";
echo "i = " . $a;


?>