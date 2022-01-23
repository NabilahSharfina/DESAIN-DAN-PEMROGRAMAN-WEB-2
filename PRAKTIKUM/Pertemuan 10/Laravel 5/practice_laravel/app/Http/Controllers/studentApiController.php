<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentApiController extends Controller
{
    public function index(){
        $data['students'] = Student::all(); // Variabel students isinya data-data dari tabel Student

        return response() -> json($data); // Diarahkan return data array ke API
    }

    public function getById($id){
        $data['student'] = Student::find($id); // Mengambil data dari database berdasarkan id, lalu simpan ke dalam array terlebih dahulu

        return response() -> json($data); // Diarahkan return data array ke API
    }

    public function getByNIM($nim){
        $data['student'] = Student::where('nim', $nim) -> first(); // Mencari data dari database berdasarkan nim, lalu simpan ke dalam array terlebih dahulu

        return response() -> json($data); // Diarahkan return data array ke API
    }

    public function save(){
        $student = new Student;
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->department = request('department');
        $student->address = request('address');
        $student -> save();

        return response() -> json(['message' => "Data berhasil disimpan!"]); // Diarahkan return data array ke API
    }

    public function update($id){
        $student = Student::find($id);
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->department = request('department');
        $student->address = request('address');
        $student -> save();

        return response() -> json(['message' => "Data berhasil diubah!"]); // Diarahkan return data array ke API
    }

    public function delete($id){
        $student = Student::find($id);
        $student -> delete();

        return response() -> json(['message' => "Data berhasil dihapus!"]); // Diarahkan return data array ke API
    }
}
