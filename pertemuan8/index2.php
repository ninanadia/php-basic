<?php
//Koneksi ke Database
//kita butuh beberapa parameter
//host, username admin, password kosong / root jika mamp, nama database
$conn = mysqli_connect("localhost", "root", "", "cruddb");

// ambil data dari tabel mahasiswa / query data mahasiswa
// parameter ada dua
// 1. koneksi ke database, 2. QUERY SQL
// daripada kita copy terus lebih baik koneks  db nya kita simpan kedalam sebuah variabel
// biasanya db, link atau conn/ koneksi
// hati - hati kalau melakukan query pakai mysqli ini mau berhasil atau gagal 
// ga ada pesan kesalahan
// cara mengakali nya kita simpan ini ke variabel result
// nah jika pakai variabel result ini akan mengembalikan dua nilai
// jika berhasil dia akan mengeksekusi query dan mengembalikan nilai TRUE
// jika gagal dia tidak akan menjalankan query dan return nilai FALSE
$result = mysqli_query($conn, "SELECT * FROM siswi");
//var_dump($result);
// mau nampilin error
// if( !$result){
//     echo mysqli_error($conn);
// }

// ambil data siswa dari object result (fetch) ada 4 cara
// mysqli_fetch_row() // mengembalikan array numeric/index
// mysqli_fetch_assoc() // mengembalikan array assosiatif
// mysqli_fetch_array() // mengembalikan array asso/numerik
// mysqli_fetch_object() // mengembalikan object

// mengembalikan array numeric/indeks
// $si = mysqli_fetch_row($result);
// var_dump($si);
// Mau nampilin NIS
// var_dump($si[2]);

// Mengembalikan array assosiatif
// $si = mysqli_fetch_assoc($result);
// var_dump($si);
// var_dump($si["jurusan"]);

// Mengembalikan array assosiatif dan numerik
// $si = mysqli_fetch_array($result);
// var_dump($si);
// var_dump($si[2]);
// var_dump($si["jurusan"]);

// $si = mysqli_fetch_object($result);
// var_dump($si->nama);
// var_dump($si[2]);
// var_dump($si["jurusan"]);

//Looping
// Mau menampilkan seluruh array nya berarti harus menggunakan looping
// while($si = mysqli_fetch_assoc($result)){
//     var_dump($si);
// }


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

    <!-- Simulasi -->
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php $i=1 ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <!-- <td>1</td>
            <td>Nina Nadia</td>
            <td>177050079</td>
            <td>nina.nadia@idn.sch.id</td>
            <td>Teknik Informatika</td>
            <td><img src="img/ninanadia.JPG" width=50 alt=""></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td> -->
            <td><?= $i ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["nis"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
            <!-- <td><img src="img/<?php echo $row["gambar"]; ?>" width=50 alth=""></td> -->
            <td><img src="img/<?= $row["gambar"]; ?>" width=50 alth=""></td>
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