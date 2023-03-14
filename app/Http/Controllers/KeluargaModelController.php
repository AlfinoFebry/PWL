<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaModelController extends Controller
{
    function index()
    {
        $data = KeluargaModel::all();
        return view('keluarga', ['data' => $data]);
    }
}
