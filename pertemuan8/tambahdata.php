<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){
    //ambil data dari tiap elemen dalam form
    // $nama = $_POST["nama"];
    // $nis = $_POST["nis"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    // var_dump($_POST["submit"]);
    
    // Query insert data to database
    // $query = "INSERT INTO siswi
    //             VALUES
    //             ('', '$nama', '$nis', '$email', '$jurusan', '$gambar')
    //         ";
    // mysqli_query($conn, $query);

    // cek apakah data berhasil ditambahkan atau tidak
    /* Kalau kalian ingat ketika memasukkan data di MySQL selalu ada pemberitahuan
        Query ok/ Query Affected
        nah kalau berhasil itu dia akan mengembalikan nilai 1
        kalau salah -1/ gagal
         kalau NUll/ 0
    */
    // CARA MANUAL
    // if( mysqli_affected_rows($conn) > 0){
    //     echo "Data Berhasil Ditambahkan";
    // } else {
    //     echo "Data gagal ditambahkan";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }

    //CARA Functions
    if(tambah($_POST) > 0){
        //echo "data berhasil ditambahkan";
        echo "<script> 
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
                
            </script>
        ";
    } else {
        //echo "data gagal ditambahkan";
        echo "<script> 
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    Nama: <input type="text" name="nama" required>
    <br><br>
    NIS: <input type="text" name="nis" required>
    <br><br>
    Email: <input type="text" name="email" required>
    <br><br>
    Jurusan: <input type="text" name="jurusan" required>
    <br><br>
    Gambar: <input type="text" name="gambar">
    <br><br>
    <button type="submit" name="submit">Tambah Data!</button>

   
    </form>
</body>
</html>