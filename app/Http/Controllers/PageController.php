<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }
    public function about(){
        echo "Alfino Febry Krissaputra";
        echo "<br>2141720187";
    }
    public function articles($id){
        echo "Halaman artikel dengan dengan ID $id";
    }
    public function aboutUs(){
        return view('praktikum1.aboutUs');
    }
    public function program(){
        return view('praktikum1.program');
    }

    public function programDetail($subProgram){
        return view('praktikum1.program', ['subProgram' => $subProgram]);
    }
}
