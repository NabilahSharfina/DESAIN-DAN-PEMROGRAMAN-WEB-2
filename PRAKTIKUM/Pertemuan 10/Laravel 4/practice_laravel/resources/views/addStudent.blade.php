<!-- Fungsi extends sendiri adalah untuk menentukan file mana yang diwariskan ke dalam file child.
    File parent adalah file base.blade.php dan yang menjadi file child adalah file beranda.blade.php -->
@extends('template.base')
<!-- Fungsi section adalah untuk mendefinisikan isi dari yield sehingga kode HTML pada
    file beranda.blade.php dan base.blade.php dapat saling terhubung -->
@section('content')
<body>
    <!--- Menampilkan pesan notifikasi apabila berhasil -->
    @if(session('pesan'))
        <div class="alert alert-success">
            {{ session('pesan') }}
        </div>
    @endif

    <!--- Menampilkan pesan notifikasi apabila terjadi kesalahan / error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> There were some problems with your input.
            <br>
            <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <!--- Menampilkan menu kembali ke URL /mahasiswa (menu utama), ketika mengakses URL /mahasiswa, maka akan diarahkan ke class StudentController dengan method index -->
                <div class="pull-left">
                    <a class="btn btn-primary" href="/mahasiswa" title="Go back">
                        <i class="fas fa-backward "></i>
                    </a>
                </div>
                <!-- Judul Sub Menu -->
                <div class="pull-right">
                    <h2>Add New Student</h2>
                </div>
            </div>
        </div>

        <!--- Menampilkan menu tambah data mahasiswa, ketika mengakses route student.store dengan method post, maka akan diarahkan ke class StudentController dengan method store -->
        <form action="{{ route('student.store') }}" method="post">
            @csrf <!-- Melindungi website saat menginput data secara massal -->

            <div class="row">
                <!-- Kolom input NIM -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIM :</strong>
                        <input type="text" name="nim" class="form-control" placeholder="nim">
                    </div>
                </div>
                <!-- Kolom input Nama -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name :</strong>
                        <input type="text" name="name" class="form-control" placeholder="name">
                    </div>
                </div>
                <!-- Kolom opsi memilih jenis kelamin -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender :</strong>
                        <select name="gender" required id="" class="form-control" placeholder="gender">
                            <option value="#" selected>Choose</option> <!-- Menampilkan hasil opsi yang dipilih -->

                            @foreach ($gender as $gd)
                                <option value="{{ $gd }}">{{ $gd }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Kolom opsi memilih jurusan -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Department :</strong>
                        <select name="department" required id="" class="form-control" placeholder="department">
                            <option value="#" selected>Choose</option> <!-- Menampilkan hasil opsi yang dipilih -->

                            @foreach ($department as $dp)
                                <option value="{{ $dp }}">{{ $dp }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Kolom input alamat -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address :</strong>
                        <input type="text" name="address" class="form-control" placeholder="address">
                    </div>
                </div>
                <!-- Button primary submit data -->
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</body>
@endsection
