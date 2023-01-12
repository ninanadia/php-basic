<?php
##############################
# Pertemuan 5
# Nama file : function2.php
#############################

function hitungHarga($nama_produk, $harga, $diskon=0){
    if ($diskon == 0){
        return $harga;
    } else {
        return $harga - ($harga * ($diskon/100));
    }
}

# memanggil fungsi hitungHarga()
$harga1 = hitungHarga("kaos", 250000);       #tanpa diskon
$harga2 = hitungHarga("kemeja", 500000, 20); # diskon 20%
$harga3 = hitungHarga("jaket", 1000000, 30); # diskon 30%

# menampilkan hasil perkalian
echo "Harga kaos: " . $harga1 . "<br>";
echo "Harga kemeja: " . $harga2 . "<br>";
echo "Harga jaket: " . $harga3 . "<br>";


?>