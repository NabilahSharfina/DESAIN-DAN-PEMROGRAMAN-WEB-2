<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Fungsinya membuat kolom, lalu dikonversi menjadi script SQL sehingga otomatis menjadi sebuah tabel Student 
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('nim');
            $table->string('name');
            $table->char('gender', 1); // Tipe data char dengan max panjang 1
            $table->string('department');
            $table->text('address')->nullable(); // Kolom bisa dikosongi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
