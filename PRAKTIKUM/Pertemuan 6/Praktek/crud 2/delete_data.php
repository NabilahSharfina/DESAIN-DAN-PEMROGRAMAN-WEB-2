<?php
/*
** Fungsi include digunakan untuk memanggil data file lain, contoh connection.php & create_message.php
*/
include "connection.php";
include "create_message.php";

$sql = "DELETE FROM data WHERE id=" . $_GET['mahasiswa_id']; // MySQL Delete Query

// Check condition of execution
if ($conn -> query($sql) === TRUE) {
    $conn -> close();
    // Create notification message "Delete data successfully", "success", and "check"
    create_message('Delete data successfully', 'success', 'check'); 
    header("location: index.php");
    exit();
} else {    
    $conn -> close();
    // Create notification message if there any error
    create_message("Error: " . $sql . "<br>" . $conn -> error, "danger", "warning");
    header("location: index.php");
    exit();
}
?>