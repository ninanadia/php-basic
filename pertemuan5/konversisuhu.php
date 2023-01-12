<?php
##############
# Konveri suhu 
##############

function konversiSuhu($celcius=0){
  return $f = 9/5*$celcius+32;
}

// echo "Masukkan suhu Celcius anda :";
// $celcius = fgets(STDIN);
$f1 = konversiSuhu(8);
echo "suhu 8C ke Farenheit adalah " . $f1;