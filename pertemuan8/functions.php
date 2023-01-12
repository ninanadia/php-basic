<?php
// Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "cruddb");

function query($query) {
    // global $conn
    $result = mysqli_query($GLOBALS['conn'], $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        // kita buat variabel sebagai penampung atau wadah
        // $row adalah lemari tempat array yang diambil
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

     // Query insert data to database
    $query = "INSERT INTO siswi VALUES('', '$nama', '$nis', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//parameter id akan dikirim dari halaman hapus masuk kesini
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM siswi WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubahData($data){
    global $conn;

    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE siswi SET
                nama = '$nama',
                nis = '$nis',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id= $id
            ";

    mysqli_query($conn, $query);

    //kembalikan angka ketika ada data yang berhasil diupdate
    return mysqli_affected_rows($conn);
}


?>