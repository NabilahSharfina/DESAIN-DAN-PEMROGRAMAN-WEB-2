<?php
// Fungsi include digunakan untuk menyertakan file lain, contoh koneksi.php
include "koneksi.php"; 

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PERTEMUAN 5 - CRUD PHP 1</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <!-- Method post digunakan untuk mengambil data pada database, namun 
                tidak menampilkan nilai variable di URL -->
                <form action="simpan.php" method="post"> 
                    <!--- Menu input nama dengan tipe "kolom text" -->
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                    </div>
                    <!--- Menu memilih kelas dengan tipe "menu option" -->
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
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
                    <!--- Menu button submit -->
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Mahasiswa</span>    
                    <!--- Menampilkan jumlah inputan data yang ada di table "data" -->
                    <?php foreach($showTotal as $total) : ?>
                        <span class="text-muted"><?= $total ["Total Inputan Data"]?></span>
                    <?php endforeach; ?>                
                </h4>
                <?php foreach($data as $dt) : ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?= $dt ["nama"]?></h4>
                            </div>
                            <div class="col-md-6">
                                <p class="text-right"><?= $dt ["kelas"]?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p><?= $dt ["alamat"]?></p>
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