<?php
/*
** Fungsi include digunakan untuk memanggil data file lain, contoh connection.php & create_message.php
*/
include "connection.php";
include "create_message.php"; 

/*
** Fungsi $_POST berguna untuk memanggil data yang telah diinputkan agar tampil di file action, yaitu index.php
*/
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];

if(isset($_POST['mahasiswa_id'])){
    $sql = "UPDATE data SET nama='$nama', kelas='$kelas', alamat='$alamat' WHERE id=" . $_POST['mahasiswa_id']; // SQL UPDATE STATEMENT
    $edit = $conn -> query($sql);// Connecting and running query

    if($edit){
        $conn -> close();
        // Create notification message "Update data successfully", "success", and "check"
        create_message('Update data successfully', 'success', 'check');
        header("location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else{
        $conn -> close();
        // Create notification message if there any error
        create_message("Error: " . $sql . "<br>" . $conn -> error, "danger", "warning");
        header("location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
} else{
    $sql = "INSERT INTO data(nama, kelas, alamat) VALUES('$nama', '$kelas', '$alamat')"; // Input data (nama, kelas, dan alamat) into table "data"
    $add = $conn -> query($sql); // Connecting and running query

    if($add){ 
        $conn -> close(); 
        // Create notification message "Save data successfully", "success", and "check"
        create_message('Save data successfully', 'success', 'check');
        header("location: " . $_SERVER['HTTP_REFERER']);
        exit(); 
    } else{
        $conn -> close();
        // Create notification message if there any error
        create_message("Error: " . $sql . "<br>" . $conn -> error, "danger", "warning");
        header("location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
}    
?>