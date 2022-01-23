<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // Method brand diarahkan ke view welcome.blade.php
    public function brand(){
        return view('welcome');
    }

    // Method dashboard diarahkan ke view dashboard.blade.php
    public function dashboard(){
        return view('dashboard');
    }

    // Method about diarahkan ke view about.blade.php
    public function about(){
        return view('about');
    }
}
