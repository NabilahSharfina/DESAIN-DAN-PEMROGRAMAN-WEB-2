<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_crud"; // Connect to my database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($conn -> connect_error){
    die('Koneksi Gagal : '.$conn -> connect_error);
}
?>