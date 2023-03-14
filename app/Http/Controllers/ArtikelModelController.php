<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelModelController extends Controller
{
    public function index()
    {
        $artikel = \App\Models\ArtikelModel::all();
        return view('artikel.index', ['art' => $artikel]);
    }
}
