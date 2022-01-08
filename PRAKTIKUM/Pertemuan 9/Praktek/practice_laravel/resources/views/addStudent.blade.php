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
            <h1>Tambah Data Mahasiswa</h1>
            <form action="/mahasiswa/create" method="post">
                @csrf <!-- Melindungi website saat menginput data secara massal --> 
                <table>
                    <tr>
                        <td><label for="nim">NIM</label></td>
                        <td> : </td>
                        <td><input type="text" name="nim" id="nim" required></td>
                    </tr>
                    <br>
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td> : </td>
                        <td><input type="text" name="name" id="name" required></td>
                    </tr>
                    <br>
                    <tr>
                        <td><label for="gender">Gender</label></td>
                        <td> : </td>
                        <td>
                            <select name="gender" required id="">
                                <option value="#" selected>Choose</option>

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
                                <option value="#" selected>Choose</option>

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
                        <td><input type="text" name="address" id="address" required></td>
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
