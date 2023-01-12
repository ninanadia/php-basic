<?php
//Koneksi Database
// host, username admin, password, nama database
$conn = mysqli_connect("localhost", "root", "", "cruddb");

//Query menampilkan data
$result=mysqli_query($conn, "SELECT * FROM siswi");
//var_dump($result);

// Cara ambil data siswa dari object result ada 4 (fetch data)
// mysqli_fetch_row() -> array indeks
// $si=mysqli_fetch_row($result);
//var_dump($si[2]);

// mysqli_fetch_assoc() -> array assosiatif
$si=mysqli_fetch_assoc($result);
//var_dump($si["nis"]);

// mysqli_fetch_array() -> array
// $si=mysqli_fetch_array($result);
// var_dump($si[2]);
// var_dump($si["jurusan"]);

//mysqli_fetch_object -> object
// $si=mysqli_fetch_object($result);
// var_dump($si -> nama);

// Tampilkan seluruh data
// while($si=mysqli_fetch_assoc($result)){
//     var_dump($si);
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswi</title>
</head>
<body>
    <h1>Data Siswi</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php $i=1?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row["id"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["nis"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
            <td><img src="img/<?= $row["gambar"];?>" width=50 alt=""></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endwhile ?>
    </table>
    
</body>
</html>