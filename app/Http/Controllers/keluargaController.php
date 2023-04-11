<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class keluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluarga = KeluargaModel::all();
        return view('keluarga.keluarga') -> with('klg', $keluarga);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keluarga.create_keluarga')
        ->with('keluarga_form', url('/keluarga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama_keluarga' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $data = KeluargaModel::create($request->except('_token'));
        return redirect('/keluarga')
        ->with('success', 'Data keluarga berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keluarga = KeluargaModel::find($id);
        return view('keluarga.create_keluarga')
        ->with('klg', $keluarga)
        ->with('keluarga_form', url('/keluarga/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'nama_keluarga' => 'required|string|max:255,' .$id,
            'status' => 'required|string|max:255',
        ]);

        $data = KeluargaModel::where('id', '=', $id)->update($request->except('_token', '_method'));
        return redirect('/keluarga')
        ->with('success', 'Data keluarga berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KeluargaModel::destroy($id);
        return redirect('/keluarga')
        ->with('success', 'Data keluarga berhasil dihapus');
    }
}
