<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('beranda');
    }

    public function profile($nama){
        return view('profile', ['nama' => $nama]);
    }

    public function home(){
        return view('praktikum1.home');
    }
}
