<!-- Fungsi extends sendiri adalah untuk menentukan file mana yang diwariskan kedalam file child.
    File parent adalah file base.blade.php dan yang menjadi file child adalah file beranda.blade.php -->
@extends('template.base')
<!-- Fungsi section adalah untuk mendefinisikan isi dari yield sehingga kode HTML pada 
    file beranda.blade.php dan base.blade.php dapat saling terhubung -->
@section('content')
    <h1>Beranda</h1>
@endsection