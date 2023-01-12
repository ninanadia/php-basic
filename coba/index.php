<?php
require 'functions.php';
$siswi = query("SELECT * FROM siswi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswi</title>
</head>
<body>
    <h1>Daftar Siswi</h1>
    <a href="tambahdata.php">Tambah Data Siswi</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php $i=1 ?>
        <?php  foreach($siswi as $row): ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["nama"] ?></td>
            <td><?php echo $row["nis"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
            <td><img src="img/<?= $row["gambar"] ?>" alt="" width="50"></td>
            <td>
                <a href="">Ubah</a>
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin Dihapus?')";>Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ?>

    </table>


    
</body>
</html>