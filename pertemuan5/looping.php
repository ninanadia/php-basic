<?php
###############################
# Pertemuan 5
# pengulangan
##############################

//for
// Biasanya untuk perulangan for kita menggunakan variabel-i
// lau diisi dengan nilai awal dimulai dari 0
// for ($i=0; $i<=5; $i++){
//     echo "Baris ke-$i <br>"; 
// }


//while
/* Notes
selama kondisi nya bernilai true lakukan 
apapun yang ada di bracket, cek kondisi dulu kalau  true jalankan
*/
// $x = 1;
// while($x <= 5) {
//   echo "The number is: $x <br>";
//   $x++;
// }

/*
$x = 1; - Initialize the loop counter ($x), and set the start value to 1
$x <= 5 - Continue the loop as long as $x is less than or equal to 5
$x++; - Increase the loop counter value by 1 for each iteration
*/

// echo "<br>";
// // Example 2 - while
// $x = 0;
 
// while($x <= 100) {
//   echo "The number is: $x <br>";
//   $x+=10;
// }

// do...while
/*Jalankan dulu baru cek kondisi, ketika kondisi bernilai false 
maka blocknya akan dijalankan dulu 1 kali, kalau while dia langsung stop program*/
// example 1
//$x = 10;
//$x = 10 -> untuk nilai false dia tetap menjalankan 1 kali
// do {
//   echo "The number is: $x <br>";
//   $x++;
// } while ($x <= 5);

//foreach
//example 1 
$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $value) {
  echo "$value <br>";
}

echo "<br>";
//example 2
/*
Perbedaan dengan format sebelumnya ada di 
variabel perantara kedua, yakni variabel $key. 
Variabel $key akan menampung nilai key array. 
Berikut contoh penggunaannya:
*/
$age = array(
    "Peter"=>"35", 
    "Ben"=>"37", 
    "Joe"=>"43");
    
    foreach($age as $x => $val) {
      echo "$x = $val<br>";
    }



?>