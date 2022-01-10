<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PERTEMUAN 9 - CRUD LARAVEL</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
				<strong>Data Mahasiswa</strong> | <a href="https://merhaba.my.id/">merhaba.my.id</a>
			</div>
            <!--- Menampilkan menu tambah data mahasiswa, ketika mengakses URL /mahasiswa/create, maka akan diarahkan ke class StudentController dengan method create -->
			<div class="card-body">
				<a href="{{ url('/mahasiswa/create') }}" class="btn btn-success" title="Create a project">
                    <i class="fas fa-plus-circle"></i>
                </a>
				<br/>
				<br/>

                <!--- Menampilkan data kolom di tabel Students -->
                <div class="table-responsive">
                    <table class="table table-hover">
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
                                    <form action="{{ url('/mahasiswa/' . $sd->id . '/delete') }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <!--- Menu edit data, ketika mengakses URL /mahasiswa/{id}/edit, maka akan diarahkan ke class StudentController dengan method edit -->
                                        <a href="{{ url('/mahasiswa/' . $sd->id . '/edit') }}" title="Edit project">
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
</body>
</html>
