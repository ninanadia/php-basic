<?php
require 'functions.php';

// cek apakkah daa terisi atau tidak
if (isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswi</title>
</head>
<body>
    <h1>Tambah Data Siswi</h1>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    Nama : <input type="text"  name="nama" required>
    <br><br>
    NIS : <input type="text"  name="nis" required>
    <br><br>
    Email : <input type="text"  name="email" required>
    <br><br>
    Jurusan : <input type="text"  name="jurusan" required>
    <br><br>
    Gambar : <input type="text"  name="gambar">
    <br><br>
  <button type="submit" name="submit">Tambah Data!!</button>
    <br><br>
</form>
</body>
</html>