<?php
$servername = "localhost"; // Host database initiation
$username = "root"; // Username initiation
$password = ""; // Password key initiation
$dbname = "php_crud"; // Connect to my database

// Create connection to database MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

/* 
** Check connection to database MySQL, if error there will be 
** stop and show notification "Koneksi Gagal"
*/
if($conn -> connect_error){
    die('Koneksi Gagal : '.$conn -> connect_error);
}
?>