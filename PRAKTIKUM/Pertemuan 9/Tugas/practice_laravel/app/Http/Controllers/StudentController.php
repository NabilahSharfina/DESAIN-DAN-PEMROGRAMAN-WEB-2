<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $data['students'] = Student::all(); // Variabel students isinya data-data dari tabel Student

        return view('student', $data); // Diarahkan ke folder views dengan nama file student
    }

    public function create(){
        // Membawa data gender dan department
        $data['gender'] = ["L", "P"];
        $data['department'] = ["S1 Software Engineering", "S1 Data Science", "S1 Informatic Engineering", "S1 System Information"];

        return view('addStudent', $data); // Diarahkan ke folder views dengan nama file addStudent
    }

    public function store(){
        $student = new Student;
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->department = request('department');
        $student->address = request('address');
        $student -> save();

        /**
         * Redirect disisipkan flash message menggunakan
         * fungsi with() untuk memberikan pesan balik yang
         * nantinya akan ditampilkan pada view dari route yang dituju.
        */
        return redirect() -> back() -> with('pesan', "Berhasil menambah data!");
    }

    public function show(Student $student)
    {
        return view('showStudent', $student);
    }

    public function edit($id){
        $data['student'] = Student::find($id); // Dalam variabel student, nanti akan secara default mencari data student berdasarkan id
        /**
         * Jika mencari data selain dari id:
         * $data['student'] = Student::where('nim', $id) -> first();
         * $data['student'] = Student::where('gender', $id) -> first();
         * ...dst
         */
        $data['gender'] = ["L", "P"];
        $data['department'] = ["S1 Software Engineering", "S1 Data Science", "S1 Informatic Engineering", "S1 System Information"];

        return view('editStudent', $data); // Diarahkan ke folder views dengan nama file editStudent
    }

    public function update(Request $request, $id){
        $student = Student::find($id); // Secara default mencari data student berdasarkan id
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->department = request('department');
        $student->address = request('address');
        $student -> save();

        /**
         * Redirect disisipkan flash message menggunakan
         * fungsi with() untuk memberikan pesan balik yang
         * nantinya akan ditampilkan pada view dari route yang dituju.
        */
        return redirect() -> back() -> with('pesan', "Berhasil mengubah data!");
    }

    public function destroy($id){
        $student = Student::find($id);
        $student -> delete();

        /**
         * Redirect disisipkan flash message menggunakan
         * fungsi with() untuk memberikan pesan balik yang
         * nantinya akan ditampilkan pada view dari route yang dituju.
        */
        return redirect() -> back() -> with('pesan', "Berhasil menghapus data!");
    }
}
