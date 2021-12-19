<?php
// Fungsi include digunakan untuk menyertakan file lain, contoh koneksi.php
include "koneksi.php"; 

/*
* Fungsi $_POST berguna untuk memanggil data yang telah diinputkan agar tampil di file action, yaitu index.php
*/
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];

// Query insert data into table "data"
$sql = "INSERT into data(nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";
$add = $conn -> query($sql);

if($add){
    $conn -> close();
    header("location: index.php");
    exit();
}else{
    echo "Error: ".$conn -> error;
    $conn -> close();
    exit();
}    
?>