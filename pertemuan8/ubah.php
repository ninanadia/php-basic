<?php
require 'functions.php';

// ambil data id di url
$id = $_GET["id"];

// query data siswa berdasarkan id nya
$siswi = query("SELECT * FROM siswi WHERE id = $id")[0];
//nampilin data
//var_dump($siswi);
// mau nampilin data hanya nis
// var_dump($siswi["nis"]);
// var_dump($siswi[0]["nis"]);

if( isset($_POST["submit"])){
    if(ubahData($_POST) > 0){
        //echo "Data berhasil diubah";
        echo "<script>
            alert('data berhasil diubah');
            document.location.href='index.php';
        </script>";
    }else{
        //echo "Data gagal ditambahkan";
        echo "<script>
            alert('data gagal diubah');
            document.location.href='index.php';
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
    <title>Ubah Data Siswi</title>
</head>
<body>
    <h1>Ubah Data Siswi</h1>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    <input type="hidden" name="id" values="<?= $siswi['id']; ?>">
    Nama: <input type="text" name="nama" required value="<?= $siswi['nama']; ?>">
    <br><br>
    NIS: <input type="text" name="nis" required value="<?= $siswi['nis']; ?>">
    <br><br>
    Email: <input type="text" name="email" required value="<?= $siswi['email']; ?>">
    <br><br>
    Jurusan: <input type="text" name="jurusan" required value="<?= $siswi['jurusan']; ?>">
    <br><br>
    Gambar: <input type="text" name="gambar" required value="<?= $siswi['gambar']; ?>">
    <br><br>
    <button type="submit" name="submit">Ubah Data</button>

    </form>
    
</body>
</html>