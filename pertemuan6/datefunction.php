<?php
//built-in function

// function date
// l -> day name
// d -> date
// M -> Month
// m -> month

// echo date("m");
// echo "<br>";
// echo date("l, d M Y");

//function time
echo time();// unixtimestamp// epoch time
echo "<br>";
echo date("l", time());

echo "<br>";
echo date("l", time()-60*60*24*100);
// 60 -> detik
// 60 -> jam
// 24 -> jam dalam sehari
// 2-> hari yang mau ditebak

echo date("d M Y", time()-60*60*24*100);

// MKTIME
// jam, menit, detik, bulan, tanggal, tahun
// echo mktime(0,0,0,0,0,0);
echo "<br>";
echo date("l", mktime(0,0,0,1,16,1999));
echo "<br>";

// strtotime
echo strtotime("16 Jan 1999");
echo "<br>";
echo date("l", strtotime("16 Jan 1999"));

?>