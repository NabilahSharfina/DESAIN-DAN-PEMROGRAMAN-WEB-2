<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$error = false;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . "."; 
        $error = false; 
    } else {
        echo "File is not an image."; 
        $error = false; 
    } 
}

if (file_exists($target_file)) {
    echo "\nSorry, file already exists.";
    $error = true; 
}

if ($_FILES["foto"]["size"] > 50000) {
    echo "\nSorry, your file is too large.";
    $error = true; 
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "\nSorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $error = true; 
}

if ($error == true) {
    echo "\nSorry, your file was not uploaded."; 
} else {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        echo "\nThe file " . basename($_FILES["foto"]["name"]) . " has been uploaded.";
    } else {
        echo "\nSorry, there was an error uploading your file."; 
    } 
}
?>