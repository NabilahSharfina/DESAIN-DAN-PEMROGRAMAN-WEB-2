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
            <div class="pull-left">
                <h2>Edit Student</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>

            <form action="/mahasiswa/{{ $student->id }}/edit" method="post">
                @csrf
                @method('put')

                <table>
                    <tr>
                        <td><label for="nim">NIM</label></td>
                        <td> : </td>
                        <td><input value="{{ $student->nim }}" type="text" name="nim" id="nim" required></td>
                    </tr>
                    <br>
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td> : </td>
                        <td><input value="{{ $student->name }}" type="text" name="name" id="name" required></td>
                    </tr>
                    <br>
                    <tr>
                        <td><label for="gender">Gender</label></td>
                        <td> : </td>
                        <td>
                            <select name="gender" required id="">
                                <option value="#">Choose</option>
                                <!-- Menampilkan hasil option yang dipilih -->
                                <option selected value="{{ $student->gender }}">{{ $student->gender }}</option>

                                @foreach ($gender as $gd)
                                <option value="{{ $gd }}">{{ $gd }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><label for="department">Department</label></td>
                        <td> : </td>
                        <td>
                            <select name="department" required id="">
                                <option value="#">Choose</option>
                                <!-- Menampilkan hasil option yang dipilih -->
                                <option selected value="{{ $student->department }}">{{ $student->department }}</option>

                                @foreach ($department as $dp)
                                    <option value="{{ $dp }}">{{ $dp }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><label for="address">Address</label></td>
                        <td> : </td>
                        <td><input value="{{ $student->address }}" type="text" name="address" id="address" required></td>
                    </tr>
                    <br>
                    <tr>
                        <td><button type="submit">SAVE</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
