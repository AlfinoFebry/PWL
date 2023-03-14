<?php

namespace App\Http\Controllers;

use App\Models\MataKuliahModel;
use Illuminate\Http\Request;

class MataKuliahModelController extends Controller
{
    function index()
    {
        $data = MataKuliahModel::all();
        return view('mataKuliah', ['data' => $data]);
    }
}
