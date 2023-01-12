<?php
function salam($waktu = "pagi", $nama = "nina"){
    return "Selamat " . $waktu . " " . $nama;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam(); ?></h1>
</body>
</html>