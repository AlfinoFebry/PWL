<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id){
        return view('praktikum1.news', ['id' => $id]);
    }
}
