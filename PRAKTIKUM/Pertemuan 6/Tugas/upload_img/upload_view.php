<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>PERTEMUAN 6 - Upload Image</title>

    <style>
        /* Style menampilkan judul ukuran h2 agar letaknya tepat di tengah halaman browser dengan warna hitam */
        h2{
            color: black;
            text-align: center;
        }

        /* Style menampilkan warna judul berubah menjadi biru ketika cursor panah diarahkan */
        h2:hover{
            color: blue;
        }
    </style>
</head>
<body>
    <!-- Function for add picture with POST method -->
    <form action="upload_process.php" method="post" enctype="multipart/form-data">
        <h2>MENU UNGGAH FOTO</h2>
        <p>Pilih Foto&ensp;:</p> <!-- Fungsi &ensp; untuk memberi 2 tabs -->
        <input type="file" name="foto" id="foto">
        <input type="submit" name="submit">
    </form>
</body>
</html>