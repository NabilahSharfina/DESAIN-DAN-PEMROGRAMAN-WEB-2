<!-- Fungsi extends sendiri adalah untuk menentukan file mana yang diwariskan ke dalam file child.
    File parent adalah file base.blade.php dan yang menjadi file child adalah file beranda.blade.php -->
@extends('template.base')
<!-- Fungsi section adalah untuk mendefinisikan isi dari yield sehingga kode HTML pada
    file beranda.blade.php dan base.blade.php dapat saling terhubung -->
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        h6{
            text-align: center;
        }
    </style>

    <h1><i class="fa fa-info-circle" style="font-size:40px"></i>&nbsp;About</h1> <!-- Menampilkan logo dan &nbsp sebagai fungsi tab -->
    <p>Ini adalah mata kuliah "Praktikum Desain dan Pemrograman Web 2" yang mempelajari framework PHP yaitu Laravel.</p>
    <br>
    <h6>&copy; 2022 by Nabilah Sharfina</h6> <!-- Menampilkan logo copyright -->
@endsection
