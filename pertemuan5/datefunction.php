<?php
###############################
# Pertemuan 5
# built-in function
##############################

// function date
// untuk menampilkan tanggal dengan format tertentu
// l -> day name
// d -> date
// M -> Month -> in huruf
// m -> month -> in number
echo date("m");
echo "<br>";
echo date("l, d-M-Y <br>");
echo "<br>";

//function Time
/*
jika kalian jalankan akan mengeluarkan serangkaian
angka nah ini, dan kalu di refresh angka belakangnya berubah-ubah
ini dinamakan dengan UNIX Timestamp / EPOCH time
ini adalah asal mula waktu di dunia komputer
jadi angka tadi adalah detik 
yang sudah berlalu sejak 1 Januari 1970, sampai saat ini
*/
echo time();
echo "<br>";

//dua function bersamaan 
echo date ("l", time());
echo "<br>";

// Gabung dua fungsi
// Mau cek dua hari lagi dari hari ini hari apa ?
echo date ("l", time()+60*60*24*2);
echo "<br>";
/* notes
60 -> detik
60 -> jam
24 -> jam dalam sehari
2 -> hari yang mau ditebak
*/
// Mau tebak 100 hari kebelakang hari apa
echo date ("d M Y", time()-60*60*24*100);


// mktime -> function untuk membuat sendiri detik yang kalian inginkan
// mktime(0,0,0,0,0,0) -> ada 6 parameter
// jam, menit, detik, bulan, tanggal, tahun
// Kita hitung detik yang sudah berlalu 
// dari 1 Januari 1970 hingga tanggal lahir kita
echo mktime(0,0,0,1,16,1999);
echo "<br>";
echo date("l",mktime(0,0,0,1, 16, 1999));
echo "<br>";

//strtotime
// masukin format tanggal keluarnya detik
// kebalikan dari mktime kalau str inputnya itu string
echo strtotime("16 Jan 1999");
echo "<br>";
echo date("l", strtotime("16 jan 1999"));



?>