<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 6 - Session</title>
</head>
<body>
    <!-- Method post digunakan untuk mengambil data pada database, lalu 
    data dikirim ke file action, yaitu "session_process.php". 
    Namun tidak menampilkan nilai variable di URL -->
	<form action="session_process.php" method="post">
        <input type="text" name="kolom_input_session1" required /></br>
        <input type="text" name="kolom_input_session2" required /></br>
        <button type="submit">Simpan</button>
	</form>

    <!-- Button function for delete input data in session -->
    <a href="session_process.php?process=hapus_session1"><button>Hapus Session 1</button></a><br>
    <a href="session_process.php?process=hapus_session2"><button>Hapus Session 2</button></a><br>
    <a href="session_process.php?process=hapus_semua_session"><button>Hapus Session Semua</button></a><br>

    <!-- Save value for saving into session -->
    <?php session_start() ?>
    Session yang tersimpan 1: 
    <?php echo isset($_SESSION['session_tersimpan1'])?$_SESSION['session_tersimpan1']:'Session 1 Kosong' ?>
    <br>
    Session yang tersimpan 2: 
    <?php echo isset($_SESSION['session_tersimpan2'])?$_SESSION['session_tersimpan2']:'Session 2 Kosong' ?>
</body>
</html>