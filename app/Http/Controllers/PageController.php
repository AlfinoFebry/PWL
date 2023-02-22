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
}
