<?php
// Fungsi include digunakan untuk menyertakan fungsi yang ada di file lain, contoh connection.php
include "connection.php"; 

session_start(); // Running session

$kelas = ['SE-03-A','SE-03-B']; // Input nama kelas
$sql = "SELECT * FROM data"; // SQL Select Statement
$data = $conn -> query($sql); // Connection into query "$sql"

$sqlTotal = "SELECT COUNT(*) AS 'Total Inputan Data' FROM data"; // SQL COUNT() Function
$showTotal = $conn -> query($sqlTotal); // Connection into query "$sqlTotal"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>PERTEMUAN 6 - CRUD PHP 2</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        /* Style menampilkan judul ukuran h2 agar letaknya tepat di tengah halaman browser dengan warna hitam */
        h1{
            color: black;
            text-align: center;
        }

        /* Style menampilkan warna judul berubah menjadi biru ketika cursor panah diarahkan */
        h1:hover{
            color: blue;
        }

        /* Style bold untuk format all label */
        form label{
            font-weight: bold;
        }

        /* Style untuk mengatur komposisi background saat jumlah data ditampilkan */
        .showTotal { 
            height: 35px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: grey;
            border-radius: 20px;
            position: absolute;
            top: 0;
            right: 15px;
        }

        /* Style untuk mengatur tata letak berupa angka dari jumlah data yang ditampilkan */
        .showTotal {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: 500;
            font-size: larger;
        }

        /* Style untuk mengatur tata letak preview foto sebelum diupload*/
        .preview-pict {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <?php include "read_message.php" ?>
                <!-- Method post digunakan untuk mengambil data pada database, namun 
                tidak menampilkan nilai variable di URL -->
                <form action="save.php" method="post"> 
                    <!--- Menu input nama dengan tipe "kolom text" -->
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                    </div>
                    <!--- Menu memilih kelas dengan tipe "menu option" -->
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <!-- Menampilkan data opsi pilihan kelas yang tersedia -->
                        <select name="kelas" class="form-control" required>
                            <option value="">Pilih</option>
                            <?php foreach ($kelas as $kl) : ?>
                                <option value="<?= $kl; ?>"><?= $kl; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!--- Menu input alamat dengan tipe "kolom text" -->
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="foto">Upload Foto</label>
                        <br>
                        <input type="file" name="foto" id="foto" accept="images/*" onchange="loadfile(event)" required>
                        <!-- Menampilkan preview gambar sebelum diupload -->
                        <div class="preview-section mt-3 mb-3"> 
                        <img id="preview-img" alt="" height="200px">
                        <script type="text/javascript"> 
                            function loadfile(event){
                                var output = document.getElementById('preview-img');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            }
                        </script>
                        </div>
                    </div>
                    <!--- Menu button submit -->
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Mahasiswa</span>    
                    <!--- Menampilkan jumlah inputan data yang ada di table "data" -->           
                    <?php foreach($showTotal as $total) : ?>
                        <span class="showTotal"><?= $total ["Total Inputan Data"]?></span>
                    <?php endforeach; ?>
                </h4>
                <?php foreach($data as $dt) : ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 preview-pict">
                                <img><?= $dt['foto']; ?></img>
                            </div>
                            <div class="col-md-4">
                                <h4><?= $dt ["nama"]?></h4>
                                <p><?= $dt ["alamat"]?></p>
                            </div>
                            <div class="col-md-6">
                                <!-- Menambahkan tombol hapus data -->
                                <a class="float-right ml-3 text-danger" href="delete_data.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close">
                                    <span class="fa fa-trash"></span>
                                </a>
                                <!-- Menambahkan tombol edit data -->
                                <a class="float-right ml-3 text-success" href="update_data.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close">
                                    <span class="fa fa-edit"></span>
                                </a>
                                <!-- Menampilkan data kelas -->
                                <p class="text-right"><?= $dt['kelas']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>