<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PERTEMUAN 9 - CRUD LARAVEL</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            @if(session('pesan'))
                <div class="alert alert-success">
                    {{ session('pesan') }}
                </div>
            @endif

            <a href="" class="btn btn-primary mb-2">ADD</a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    
                    @php
                        $no = 1
                    @endphp

                    @foreach ($students as $sd)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $sd->nim }}</td>
                            <td>{{ $sd->name }}</td>
                            <td>{{ $sd->gender }}</td>
                            <td>{{ $sd->department }}</td>
                            <td>{{ $sd->address }}</td>
                            <td>
                                <a href="{{ url('/mahasiswa/' . $sd->id . '/edit') }}" class="btn btn-warning">EDIT</a>
                                <form action="{{ url('/mahasiswa/' . $sd->id . '/delete') }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>
