<!-- Fungsi extends sendiri adalah untuk menentukan file mana yang diwariskan ke dalam file child.
    File parent adalah file base.blade.php dan yang menjadi file child adalah file beranda.blade.php -->
@extends('template.base')
<!-- Fungsi section adalah untuk mendefinisikan isi dari yield sehingga kode HTML pada
    file beranda.blade.php dan base.blade.php dapat saling terhubung -->
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PERTEMUAN 10</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Installasi jQuery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Installasi data tables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>
    <!--- Menampilkan pesan notifikasi apabila berhasil -->
    @if(session('pesan'))
        <div class="alert alert-success">
            {{ session('pesan') }}
        </div>
    @endif

    <div class="container">
        <div class="card mt-5">
            <!--- Menampilkan header container -->
            <div class="card-header text-center">
                <h1>Student Data</h1>
                <h4>without Data Tables</h4>
				<strong>Student List</strong> | <a href="https://merhaba.my.id/">merhaba.my.id</a>
			</div>
            <!--- Menampilkan menu tambah data mahasiswa, ketika mengakses route student.create, maka akan diarahkan ke class StudentController dengan method create -->
			<div class="card-body">
				<a href="{{ route('student.create') }}" class="btn btn-success" title="Create a project">
                    <i class="fas fa-plus-circle"></i>
                </a>
                <a href="{{ route('index.api') }}" class="btn btn-primary" title="Show data API">
                    <i class="fas fa-cloud-arrow-down"></i>
                </a>
				<br/>
				<br/>

                <!--- Menampilkan data kolom di tabel Students -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>NIM</td>
                                <td>Name</td>
                                <td>Gender</td>
                                <td>Department</td>
                                <td>Address</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <!--- Mendeklarasikan array nomor urut data -->
                        @php
                            $no = 1
                        @endphp

                        <!--- Menampilkan inputan data -->
                        <tbody>
                            @foreach ($students as $sd)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $sd->nim }}</td>
                                <td>{{ $sd->name }}</td>
                                <td>{{ $sd->gender }}</td>
                                <td>{{ $sd->department }}</td>
                                <td>{{ $sd->address }}</td>
                                <td>
                                    <form action="{{ url('/mahasiswa/delete/' . $sd->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <!--- Menu edit data, ketika mengakses route student.edit, maka akan diarahkan ke class StudentController dengan method edit -->
                                        <a href="{{ route('student.edit', $sd->id) }}" title="Edit project">
                                            <i class="fas fa-edit fa-lg"></i>
                                        </a>

                                        <!--- Menu hapus data, ketika mengakses URL /mahasiswa/{id}/delete dengan method post, maka akan diarahkan ke class StudentController dengan method destroy -->
                                        <button type="submit" title="Delete project">
                                            <i class="fas fa-trash fa-lg text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="card mt-5">
            <!--- Menampilkan header container -->
            <div class="card-header text-center">
                <h1>Student Data</h1>
                <h4>with Data Tables</h4>
				<strong>Student List</strong> | <a href="https://merhaba.my.id/">merhaba.my.id</a>
			</div>
            <!--- Menampilkan menu tambah data mahasiswa, ketika mengakses route student.create, maka akan diarahkan ke class StudentController dengan method create -->
			<div class="card-body">
				<a href="{{ route('student.create') }}" class="btn btn-success" title="Create a project">
                    <i class="fas fa-plus-circle"></i>
                </a>
                <a href="{{ route('index.api') }}" class="btn btn-primary" title="Show data API">
                    <i class="fas fa-cloud-arrow-down"></i>
                </a>
				<br/>
				<br/>

                <!--- Menampilkan data kolom di tabel Students -->
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIM</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Department</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <!--- Mendeklarasikan array nomor urut data -->
                        @php
                            $no = 1
                        @endphp

                        <!--- Menampilkan inputan data -->
                        <tbody>
                            @foreach ($students as $sd)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $sd->nim }}</td>
                                <td>{{ $sd->name }}</td>
                                <td>{{ $sd->gender }}</td>
                                <td>{{ $sd->department }}</td>
                                <td>{{ $sd->address }}</td>
                                <td>
                                    <form action="{{ url('/mahasiswa/delete/' . $sd->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <!--- Menu edit data, ketika mengakses route student.edit, maka akan diarahkan ke class StudentController dengan method edit -->
                                        <a href="{{ route('student.edit', $sd->id) }}" title="Edit project">
                                            <i class="fas fa-edit fa-lg"></i>
                                        </a>

                                        <!--- Menu hapus data, ketika mengakses URL /mahasiswa/{id}/delete dengan method post, maka akan diarahkan ke class StudentController dengan method destroy -->
                                        <button type="submit" title="Delete project">
                                            <i class="fas fa-trash fa-lg text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Installasi jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Installasi data tables Javascript -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Call single function -->
    <script>
        $(document) . ready( function () {
            $('#myTable') . DataTable();
        });
    </script>
</body>
</html>
@endsection
