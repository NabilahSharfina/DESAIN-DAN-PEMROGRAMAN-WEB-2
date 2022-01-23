<!-- Fungsi extends sendiri adalah untuk menentukan file mana yang diwariskan ke dalam file child.
    File parent adalah file base.blade.php dan yang menjadi file child adalah file beranda.blade.php -->
@extends('template.base')
<!-- Fungsi section adalah untuk mendefinisikan isi dari yield sehingga kode HTML pada
    file beranda.blade.php dan base.blade.php dapat saling terhubung -->
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <!-- Konten Menu Utama -->
    <table class="table1" border="0px">
        <tr>
          <td width="70%">
            <h1>NABILAH SHARFINA</h1>
            <h4>STUDENT OF SOFTWARE ENGINEERING</h4>
            <h4>TELKOM INSTITUTE OF TECHNOLOGY PURWOKERTO</h4>
            <b style="font-size: 18px">Click the button below to connect with me!</b>
            <p></p>
            <a href="https://api.whatsapp.com/send/?phone=6285812013821&text&app_absent=0">
              <button class="contact">Contact</button>
            </a>
            <a href="https://drive.google.com/file/d/1jQEcl1brkyeBh66hP8T11iUrmX6dQe65/view?usp=sharing">
              <button class="cv">Resume</button>
            </a>
          </td>
          <td>
            <br>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5q-nN0kg4KDzQAuwP66ngef_I5UrQS0RFeA&usqp=CAU" height="400px" width="400px" alt=""/>
          </td>
        </tr>
    </table>
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: gray">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap');
            .table1 {
                color: black;
                font-family: sans-serif;
                padding-left: 100px;
                text-align: left;
                margin-left: 50px;
                margin-top: -20px;
            }

            /* Tampilan Tombol Button & Fungsi Aktif Button */
            button:active{
            transform: scale(1.1);
            }

            .contact{
            font-size: 20px;
            color: whitesmoke;
            background-color: rgb(23, 110, 23);
            text-align: center;
            }

            .contact:hover{
            color: yellow;
            background-color: grey;
            }

            .cv{
            font-size: 20px;
            color: whitesmoke;
            background-color: #0f6288;
            text-align: center;
            }

            .cv:hover{
            color: yellow;
            background-color: grey;
            }
        </style>
    </section>
</html>
@endsection
